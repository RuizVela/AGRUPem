<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    public function images()
    {
        $this->belongsToMany(Image::class);
    }

}
