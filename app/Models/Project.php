<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

        protected $fillable = [
        'category_id',
        'project_name',
        'category_name',
        'website_link',
        'github_link',
        'thumb',
        'photo',
    ];
}
