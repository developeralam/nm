<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    //Get All Service
    public static function getAllService()
    {
        return Service::all();
    }
    //Get Service For Fronted
    public static function getSixService()
    {
        return Service::limit(6)->get(['name', 'id' ]);
    }
}
