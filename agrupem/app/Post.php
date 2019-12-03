<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish','post_image'];

    


    public function getImageAttribute()
    {
         return $this->post_image;
    }


    static function updateImagePost(Request $request)
    {
        
        $request->validate([
            
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        
        
        if ($request->hasFile('post_image')) 
        {
            
            $image = $request->file('post_image');
            $name = uniqid().'_'.time();
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $image->storeAs('public',$filePath);
                    
        }
        
        

       
    }

    static function getPostImage()
    {        
        $path="post_images/"; 
        $result=Storage::files($path);
        // if(empty($result)){
        //     return "storage/default/default.svg";
        // }
        return "storage/";
    }




}
