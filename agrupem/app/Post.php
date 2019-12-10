<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function getImageAttribute()
    {
         return $this->post_image;
    }


    static function updateImagePost(Request $request, $post_id )
    {
       
       
        $request->validate([
            
            'post_id'=> 'id',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

      
      
        
        if ($request->hasFile('post_image')) 
        {
           
            $image = $request->file('post_image');
            
            
            $name = $post_id.'_'.time();
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $image->storeAs("public/$post_id",$filePath);
            $route="public/$post_id/$filePath";
            

            return $route; 
            
                    
        }
        
        

      
       
    }

    static function getPostImage()
    {        
        $path="public/"; 
        $result=Storage::files($path);
        // if(empty($result)){
        //     return "storage/default/default.svg";
        // }
        return $result;
    }




}
