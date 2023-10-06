<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Jobs\SendMailJob;
use App\Models\QRForBook;
use App\Models\User;
use App\Models\UserClaimBook;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiiPostController extends Controller
{

    use HttpResponses;

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
                    return $this->success(UserResource::collection(User::where('email', $data['email'])->get()), "Login success");
                }

            }
            else{
                return $this->error(["password" => "Password atau username salah"], "Canot login", 406);
            }

        }else{
            return $this->error([], "User not found", 404);
        }


    }

    public function changeUserBook(Request $request)
    {
        $user = User::findOrFail($request->id);

        $qrcode = QRForBook::where('code', $request->code)->first();

        $data = [
            'book_id' => $request->book_id,
        ];

        $userClaimBook = UserClaimBook::where('user_id', $user->id)->first();

        if ($userClaimBook == null) {
            $data = [
                'user_id' => $user->id,
                'qr_id' => $qrcode->id,
            ];

            if (UserClaimBook::create($data)) {
                return $this->success($data, 'Success update book');
            }
            else{
                return $this->error([], "Cannot update book", 406);
            }

        }else{
            return $this->error([], "Book already claimed", 406);
        }

    }


}
