<?php

namespace App\Http\Controllers;

use App\Http\Resources\MissionQuestionConnectorResource;
use App\Http\Resources\MissionResource;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\UserResource;
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
    
    // public function testGet() 
    // {
    //     $response = Unirest\Request::get("https://api-asa.usu.ac.id/users/mahasiswa/201402108", [
    //         'Authorization' => 'Bearer ' . @$_COOKIE['ssotok'],
    //     ]);
    // }


}
