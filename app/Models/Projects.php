<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img',
        'description',
        'github_link',
        'link',
        'laravel_skill',
        'vue_skill',
        'tailwind_skill',
        'flutter_skill',
    ];
}
