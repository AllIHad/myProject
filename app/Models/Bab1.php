<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab1 extends Model
{
    use HasFactory;

    protected $casts = [
        'latar' => 'array',
        'comment' => 'array',
    ];
};
