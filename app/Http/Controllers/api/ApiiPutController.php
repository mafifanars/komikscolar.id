<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\QRForBook;
use App\Models\User;
use App\Models\UserClaimBook;
use App\Traits\HttpResponses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiiPutController extends Controller
{

    use HttpResponses;

    public function updateXpUser(Request $request)
    {
        $user = User::findOrFail($request->id);

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

    public function changeLoginInfo(Request $request)
    {
        $user = User::findOrFail($request->id);
        
        if ($user->update([
            'login' => $request->login
        ])) {
            return $this->success($user->first(), "Success edit data login");
        }else{
            return $this->error([], "Cannot update user login data", 406);
        }

    }


    public function updateProfile(Request $request) 
    {
        if ($request->all() != null) {
            $data = [];
            $data['name'] = $request->name;
            if($request->alamat != null) {
                $data["alamat"] = $request->alamat;
            }
            if($request->tgl_lahir != null) {
                $data['tgl_lahir'] = $request->tgl_lahir;
            }
            $data["profile"] = $request->profile;

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

    public function logoutUser($id) 
    {
        $user = User::findOrFail($id);
        
        $data = [
            'login' => 0,
        ];

        if ($user->update($data)) {
            return $this->success([], "Success logout user");
        }else{
            return $this->error([], "Can't logout user", 406); 
        }

    }
}
