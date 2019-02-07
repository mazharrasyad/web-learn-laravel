<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Memanggil class soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // Menggunakan soft delete
    use SoftDeletes;

    // Untuk merecord kapan data di delete
    protected $dates = ['deleted_at'];
    // deleted_at merupakan kolom oleh karena itu perlu ditambahkan pada table posts
    // php artisan make:migration add_delete_at_column_to_posts_table --table=posts
    // php artisan migrate

    protected $fillable = [
        'title', 'body', 'user_id'
    ];
}
