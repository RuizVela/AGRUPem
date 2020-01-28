<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\traits\Multilanguage;
use Illuminate\Support\Facades\File;

class Text extends Model
{
    use Multilanguage;
    protected $fillable = [
        'id','name', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    static function getQueFem()
    {
        return Text::all()->where('name','queFem')->first();
        
    }
    static function getQuiSom()
    {
        return Text::all()->where('name','quiSom')->first();
    }
    static function getNovelty()
    {
        return Text::all()->where('name','novelty')->first();
    }
}
