<?php

namespace App;

use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use Multilanguage;
    protected $fillable=[
        'title_catalan','title_spanish','content_catalan','content_spanish','startDate', 'endDate', 'expired'
    ];
    static function sortByDate()
    {
        $events = Event::all();
        $eventsSortered = $events->sortBy('startDate');
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
        $events = Event::all()->where('endDate','<',$today)->where('expired', false);
        return $events;
    }
    static function expirePastEvents()
    {
        $events = Event::getPastEvents();
        foreach ($events as $event) 
        $event->expireEvent();
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
