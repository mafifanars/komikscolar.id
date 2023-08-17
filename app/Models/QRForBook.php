<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRForBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'used',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
