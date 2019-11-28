<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'title', 'content_cat', 'content_cas'];

    public function images()
    {
        $this->belongsToMany(Image::class);
    }

}
