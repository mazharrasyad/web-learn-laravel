<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'content', 'commentable_id', 'commentable_type'
    ];

    // Menghubungkan kolom user_id
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Method untuk mengubah model yang bermacam-macam agar dapat dimasukkan ke dalam model comment    
    public function commentable()
    {
        return $this->morphTo();
    }
}
