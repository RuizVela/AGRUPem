<?php

namespace App;

use Illuminate\Support\Str;
use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    public function getEncodedImage($post)
    {
        $content = $post->getLocalContent();
        $parts = explode("<", $content);
        foreach($parts as $part){
            if(Str::contains($part, 'img')){
                $contentpart = '<'.$part;
                return $contentpart;
            }
        }
    }  
}
