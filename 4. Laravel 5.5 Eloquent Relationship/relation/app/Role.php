<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    public function posts()
    {
        // Parameter 1 : Menghubungkan model yang ingin diambil datanya
        // Parameter 2 : Menghubungkan model yand dijadikan perantara parameter 1
        // Parameter 3 : Untuk perantara berdasarkan kolom tersebut dari parameter 2
        // Parameter 4 : Untuk perantara berdasarkan kolom tersebut dari parameter 1 
    
        // Ilustrasi mengambil data posts berdasarkan role :        
        // roles : id
        // users : role_id, id
        // posts : user_id
        // roles(id) -> users(role_id, id) -> posts(user_id)

        // Cara ke 1
        return $this->hasManyThrough(Post::class, User::class, 'role_id', 'user_id');        

        // Cara ke 2
        // Parameter 5 : Sebagai id dari role_id
        // Parameter 6 : Sebagai id dari user_id
        return $this->hasManyThrough(Post::class, User::class, 'role_id', 'user_id', 'id', 'id');        
    }
}
