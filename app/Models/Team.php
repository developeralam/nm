<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    //Get All Team
    public static function getAllTeam()
    {
        return Team::all();
    }
}
