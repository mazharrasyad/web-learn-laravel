<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
        // taggable merupakan method untuk berelasi dengan table taggables
        // taggable sama seperti method commentable
    }

    public function portfolios()
    {
        return $this->morphedByMany(Portfolio::class, 'taggable');                
    }
}
