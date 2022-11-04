<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $casts = [
        'image1' => 'array',
        'image2' => 'array',
        'image3' => 'array',
        'image4' => 'array'
    ];
}
