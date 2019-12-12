<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['id', 'event_id', 'novelty_id','url'];
    
    public function Event()
    {
        return $this->belongsTo(Event::class);
    }

    public function Novelty()
    {
        return $this->belongsTo(Novelty::class);
    }

    static function updateImageEvent($request, $event_id )
    {
           
        $request->validate([
            
            'event_id'=> 'id',
            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $event= Event::find($event_id);
        if ($event->images){
            $prevImage = $event->images;
            $prevImage->each->delete();
        }
      
        
        if ($request->hasFile('event_image')) 
        {
           
            $image = $request->file('event_image');
            
            
            $name = $event_id.'_'.time();
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $image->storeAs("public/events/$event_id",$filePath);
            $route="public/events/$event_id/$filePath";

            return $route;  
            
        }
    
       
    }

    static function updateImageNovelty($request, $novelty_id )
    {
           
        $request->validate([
            
            'novelty_id'=> 'id',
            'novelty_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $novelty= Novelty::find($novelty_id);
        if ($novelty->images){
            $prevImage = $novelty->images;
            $prevImage->each->delete();
        }
      
        
        if ($request->hasFile('novelty_image')) 
        {
           
            $image = $request->file('novelty_image');
            
                    
            $name = $novelty_id.'_'.time();
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $image->storeAs("public/novelties/$novelty_id",$filePath);  
            $route="public/novelties/$novelty_id/$filePath";
            
            return $route;            
                    
        }
    
       
    }

}



