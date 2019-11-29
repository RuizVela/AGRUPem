<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'title','content_catalan','content_spanish','date'
    ];
    static function sortByDate()
    {
        $events = Event::all();
        $eventsSortered = $events->sortBy('date');
        return $eventsSortered;
    }
}
