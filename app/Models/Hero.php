<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $guarded = [

    ];
    use HasFactory;
    //Get All Hero
    public static function getAllHero()
    {
        return Hero::all();
    }
}
