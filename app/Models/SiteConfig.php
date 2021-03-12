<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $guarded=[

    ];
    use HasFactory;
    // Get All Siteconfig Data
    public static function getAllStiteConfig()
    {
        return SiteConfig::first();
    }
}
