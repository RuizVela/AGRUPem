<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'title','content_catalan','content_spanish','date', 'expired'
    ];
    static function sortByDate()
    {
        $events = Event::all();
        $eventsSortered = $events->sortBy('date');
        return $eventsSortered;
    }
    static function getNonExpiredEvents()
    {
        $events = Event::sortByDate()->where('expired',false);
        return $events;
    }
    public function expireEvent()
    {
        $this->expired = true;
        $this->save();
    }
    static function getPastEvents()
    {
        $today = date('Y-m-d');
        $events = Event::all()->where('date','<',$today)->where('expired', false);
        return $events;
    }
    static function expirePastEvents()
    {
        $events = Event::getPastEvents();
        foreach ($events as $event) 
        $event->expireEvent();
    }
}
