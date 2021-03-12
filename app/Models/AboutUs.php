<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    //Get About Us
    public static function getAboutUs()
    {
        return AboutUs::first();
    }
}
