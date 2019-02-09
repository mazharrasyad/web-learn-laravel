<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug', 'category'
    ];
    
    // Karena menggunakan table pivot yaitu table perantara antara foreign key dan primary key
    // Sehingga yang direlasikan adalah table pivot tersebut dan bukan table foreign key atau table primary key
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
