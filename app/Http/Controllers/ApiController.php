<?php

namespace App\Http\Controllers;

use App\Http\Resources\MissionResource;
use App\Models\Mission;
use App\Models\MissionSection;
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

}
