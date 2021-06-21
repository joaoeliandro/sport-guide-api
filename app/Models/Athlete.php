<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $fillable = [
        'name',
        'country',
        'medal',
        'sport'
    ];
}
