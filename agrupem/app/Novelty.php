<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

}
