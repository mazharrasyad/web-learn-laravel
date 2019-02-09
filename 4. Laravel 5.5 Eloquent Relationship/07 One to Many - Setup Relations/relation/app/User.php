<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Buat dengan /** */
    /**
     * Method One To One User -> Profile
     * 
     * @return void
     */
    public function profile()
    {
        // hasOne untuk merelasi one to one        
        // Parameter 1 untuk diarahkan ke class yang direlasi
        // Parameter 2 deklarasi foreign key
        // Parameter 3 deklarasi key dari table yang direlasi
        // $this->hasOne(Profile::class, 'foreign_user', 'primary_key');

        // Aturan yang mudah hanya menggunakan 1 parameter
        return $this->hasOne(Profile::class);
    }

    /**
     * Method One To Many User -> Profile
     * 
     * @return void
     */

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
