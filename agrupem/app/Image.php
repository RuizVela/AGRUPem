<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['id', 'post_id','url'];
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
}
