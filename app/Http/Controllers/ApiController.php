<?php

namespace App\Http\Controllers;

use App\Http\Resources\MissionResource;
use App\Http\Resources\QuestionResource;
use App\Models\Choice;
use App\Models\Mission;
use App\Models\MissionSection;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUser($id)
    {
        return User::findOrFail($id);
    }

    public function getMission()
    {
        return MissionResource::collection(MissionSection::all());
    }

    public function getQuestion()
    {
        return QuestionResource::collection(Question::all());
    }

    public function getChoice()
    {
        return Choice::all();
    }

}
