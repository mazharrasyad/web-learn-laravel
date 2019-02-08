<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Jika nama table tidak ditemukan sistem
    // protected $table = 'posts';
    protected $fillable = [
        'title', 'body'
    ];
}
