<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
        'phone',
        'mail',
        'address',
        'facebook_link',
        'github_link',
        'twitter_link',
        'instagram_link',
        'linkdin_link',
        'google_map',
    ];
}
