<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    //Get All Message
    public static function getAllMessage()
    {
        return Message::all();
    }

    //Get All UnRead Message
    public static function getAllUnreadMessage()
    {
        return Message::where('status', 0)->get();
    }
}
