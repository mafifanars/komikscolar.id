<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserClaimBook;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ApiiDeleteController extends Controller
{

    use HttpResponses;
    
    public function deleteUser($id) 
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return $this->success([], "Success delete user profile");
        }else{
            return $this->error([], "Can't delete user profile", 406);
        }

    }

    public function deleteBookUsed($id)
    {
        UserClaimBook::where('id', $id)->delete();
    }

}
