<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MissionQuestionConnectorResource;
use App\Http\Resources\MissionResource;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\UserResource;
use App\Models\ArtikelOrangtua;
use App\Models\Avatar;
use App\Models\Choice;
use App\Models\ClaimedAvatar;
use App\Models\Mission;
use App\Models\MissionSection;
use App\Models\QRForBook;
use App\Models\Question;
use App\Models\User;
use App\Models\UserClaimBook;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ApiiGetController extends Controller
{

    use HttpResponses;

    public function getAllUsers()
    {
        $user = UserResource::collection(User::all());

        if (count($user) > 0) {
            return $this->success($user, "Success get all users data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getUser($id)
    {   
        $user = UserResource::collection(User::where('id', $id)->get());

        if (count($user) > 0) {
            return $this->success($user, "Success get user");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getUserFromEmail($email)
    {
        $user = UserResource::collection(User::where('email', $email)->get());

        if (count($user) > 0) {
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

        if (count($mission) > 0) {
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

        if (count($mission) > 0) {
            return $this->success($mission, "Success get all missions");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getQuestion()
    {
        $question = QuestionResource::collection(Question::all());

        if (count($question) > 0) {
            return $this->success($question, "Success get all questions");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getChoice()
    {
        $choice =  Choice::all();

        if (count($choice) > 0) {
            return $this->success($choice, "Success get all choices");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function codeForBooks()
    {
        $code = QRForBook::all();

        if (count($code) > 0) {
            return $this->success($code, "Success get all code data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function lookClaimBook() 
    {
        $claimBook = UserClaimBook::all();

        if (count($claimBook) > 0) {
            return $this->success($claimBook, "Success get all users data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getArtikelOrangtua() 
    {
        $artikelOrangtua = ArtikelOrangtua::all();

        if (count($artikelOrangtua) > 0) {
            return $this->success($artikelOrangtua, "Success get all parent articles data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function getAvatar() 
    {
        $avatar = Avatar::all();

        if (count($avatar) > 0) {
            return $this->success($avatar, "Success get all avatar data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function seePurchaseAvatar()
    {
        $purchaseAvatar = ClaimedAvatar::all();

        if (count($purchaseAvatar) > 0) {
            return $this->success($purchaseAvatar, "Success get all purchase avatar data");
        }else{
            return $this->error([], "No data", 404);
        }
    }

    public function seeUserPurchase($id)
    {
        $avatarPurchase = ClaimedAvatar::where('user_id', $id)->get();

        if (count($avatarPurchase) > 0) {
            return $this->success($avatarPurchase, "Success get all purchase avatar data");
        }else{
            return $this->error([], "No data", 404);
        }

    }

}
