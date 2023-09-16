<?php

namespace App\Http\Controllers;

use App\Http\Resources\MissionQuestionConnectorResource;
use App\Http\Resources\MissionResource;
use App\Http\Resources\QuestionResource;
use App\Jobs\SendMailJob;
use App\Mail\VerifyEmailUserMail;
use App\Models\Choice;
use App\Models\Mission;
use App\Models\MissionSection;
use App\Models\QRForBook;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\HttpResponses;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Unirest\Request as Req;


class ApiController extends Controller
{

    use HttpResponses;


    public function getCsrfToken()
    {
        return csrf_token();
    }
    
    public function getAllUsers()
    {
        $user = User::all();

        if ($user != []) {
            return $this->success($user, "Success get all users data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getUser($id)
    {
        $user = User::findOrFail($id);

        if ($user != []) {
            return $this->success($user, "Success get user");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getUserFromEmail($email)
    {
        $user = User::where('email', $email)->first();

        if ($user != []) {
            return $this->success($user, "Success get user");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getMission($book_id = null)
    {
        $mission = MissionResource::collection(MissionSection::all(), $book_id);

        if ($book_id != null) {
            $mission = MissionResource::collection(MissionSection::where('book_id', $book_id)->get());
        }

        if ($mission != []) {
            return $this->success($mission, "Success get all missions");
        }else{
            return $this->error([], "No data", 404);
        }
    }
    
    public function getMissionById($id)
    {   
        Mission::findOrFail($id);

        $getOneMission = Mission::where('id', $id)->get();

        $mission = MissionQuestionConnectorResource::collection($getOneMission);

        return $mission;

        if ($mission != []) {
            return $this->success($mission, "Success get all missions");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getQuestion()
    {
        $question = QuestionResource::collection(Question::all());

        if ($question != []) {
            return $this->success($question, "Success get all questions");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getChoice()
    {
        $choice =  Choice::all();

        if ($choice != []) {
            return $this->success($choice, "Success get all choices");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function createUser(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ];

        $validator = Validator::make($data, [
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
        ],
        [
            'email.unique' => "Email sudah terdaftar",
        ]
        );

        if ($validator->fails()) {
            return $this->error($validator->errors(), "Data cannot created", 406);
        }

        if (User::create($data)) {
            return $this->success($data, "Data successfully created");
        }
        else{
            return $this->error([], "Data cannot created", 406);
        }
    }

    public function updateXpUser(Request $request)
    {
        $user = User::find($request->id);

        $data = [
            'xp' => $request->xp,
            'mission_index' => $request->mission_index,
        ];

        if ($user->update($data)) {
            return $this->success($data, "Data sucessfully updated");
        }else{
            return $this->error([], "Data cannot updated", 406);
        }
    }

    public function sendMail(Request $request)
    {
        $data = [
            'code' => $request->code,
            'email' => $request->email,
        ];

        if (dispatch(new SendMailJob($data))) {
            return $this->success($data, "Success sended email");

        }else{
            return $this->error([], "Can't send email", 406);
        }

    }

    public function verifyMail(Request $request)
    {
        if (User::where('email', $request->email)->update([
            'email_verified_at' => Carbon::now(),
        ])) {
            return $this->success(Carbon::now(), "Data sucessfully updated");

        }else{
            return $this->error([], "Data cannot update", 406);

        }
        
    }

    public function loginUser(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $user = User::where('email', $data['email'])->first();

        if ($user != []) {
            if (Hash::check($data['password'], $user['password'])) {
                if ($user['email_verified_at'] == null) {
                    return $this->error(["email" => "Email belum terverifikasi"], "Canot login", 406);
                }
                else{
                    return $this->success($user, "Login success");
                }

            }
            else{
                return $this->error(["password" => "Password atau username salah"], "Canot login", 406);
            }

        }else{
            return $this->error([], "User not found", 404);
        }


    }

    public function changeLoginInfo(Request $request)
    {
        $user = User::find($request->id);
        
        if ($user->update([
            'login' => $request->login
        ])) {
            return $this->success($user->first(), "Success edit data login");
        }else{
            return $this->error([], "Cannot update user login data", 406);
        }

    }

    public function codeForBooks()
    {
        $code = QRForBook::all();

        if ($code != []) {
            return $this->success($code, "Success get all code data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function changeUserBook(Request $request)
    {
        $user = User::findOrFail($request->id);

        $qrcode = QRForBook::where('code', $request->code)->first();

        $data = [
            'book_id' => $request->book_id,
        ];

        $usedCode = [
            'used' => 1,
        ];

        if ($user->update($data) && $qrcode->update($usedCode)) {
            return $this->success($data, 'Success update book');
        }else {
            return $this->error([], "Cannot update book", 406);
        }
    }

    public function updateProfile(Request $request) 
    {
        if ($request->all() != null) {
            $data = [];
            if($request->alamat != null) {
                $data["alamat"] = $request->alamat;
            }
            if($request->tgl_lahir != null) {
                $data['tgl_lahir'] = $request->tgl_lahir;
            }
            if($request->profile != null) {
                $data["profile"] = $request->profile;
            }

            if ($data != []) {
                $user = User::findOrFail($request->id);
                if ($user->update($data)) {
                    return $this->success($data, "Success update profile");
                }else{
                    return $this->error($data, "Cannot update user data", 406);
                }
                
            }
            else{
                return $this->error([], "Nothing to update", 404);
            }

        }
        else{
            return $this->error([], "No update data", 404);
        }
    }

    public function codeForBooksChangeUsed(Request $request) 
    {
        $user = User::findOrFail($request->userId);
        $bookCode = QRForBook::findOrFail($request->bookId);
        
        if(
            $user->update([
                'book_id' => $request->userClaimBook,
            ]) 
        ) 
        {
            if(
                $bookCode->update([
                    'used' => $request->bookUsed,
                ])
            )
            {
                return $this->success([], "Success");
            }
            else{
                return $this->error([], "Error", 406);
            }
        }
        else{
            return $this->error([], "Error", 406);
        }
        

    }

    // public function testGet() 
    // {
    //     $response = Unirest\Request::get("https://api-asa.usu.ac.id/users/mahasiswa/201402108", [
    //         'Authorization' => 'Bearer ' . @$_COOKIE['ssotok'],
    //     ]);
    // }


}
