<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Definisi kolom yang dapat diisi
    protected $fillable = [
        'user_id', 'phone', 'address'
    ];
}
