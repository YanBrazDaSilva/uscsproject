<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'ra', 
        'nomealuno',
        'curso'
    ];

    
}
