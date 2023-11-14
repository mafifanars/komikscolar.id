<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimedAvatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar_id',
    ];
}
