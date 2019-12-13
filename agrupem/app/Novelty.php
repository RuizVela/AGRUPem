<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    public function image()
    {
<<<<<<< HEAD
        return $this->hasOne(Image::class);
=======
        return $this->hasOne(Image::class, 'novelty_id', 'id');
>>>>>>> d845012a2b0e8b7112c25c7c06408e5723d3be96
    }
}
