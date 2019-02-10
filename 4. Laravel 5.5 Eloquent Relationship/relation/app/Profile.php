<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Definisi kolom yang dapat diisi
    protected $fillable = [
        'user_id', 'phone', 'address'
    ];

    // Cara memanggil data user dari table profile
    public function user()
    {
        // belongsto yaitu memiliki tempat pada table yang direlasikan
        return $this->belongsTo(User::class);
    }
}
