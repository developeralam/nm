<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    //Get All Client
    public static function getAllClient()
    {
        return Client::all();
    }
}
