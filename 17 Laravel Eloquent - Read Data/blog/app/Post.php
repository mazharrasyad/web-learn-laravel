<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Jika menggunakan opsi -m maka akan membuat file migration sesuai dengan nama modelnya
    // Nama model dan table dapat berbeda dengan menggunakan perintah berikut
    // protected $table = 'post';
    // protected $primaryKey = 'post_id';
}
