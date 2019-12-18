<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Novelty extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    private function validateImg($request)
    {
        $request->validate([
                               
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' //TODO: preguntar david, tamaño requerido

        ]); 
    } 

    public function uploadImage($request, $novelty) 
    {
           
        $novelty->validateImg($request);   
        
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filePath = $novelty->id. '.jpg'; //TODO preguntar david
            $image->storeAs("public/novelties/",$filePath);            
        }
        
    }
    public function imageUrl()
    {
        $route = "storage/public/novelties/$this->id.jpg";
        if (File::exists($route))
        {
            return $route;
        }
        return false;
    }
}
