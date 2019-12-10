<?php

namespace App\Http\Controllers;

use App\Event; 
use App\Image; 
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events=Event::getNonExpiredEvents();
        return view('event.calendar',['events'=>$events]);
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
       
        $event=Event::create($request->all());
        $event_id=$event->id;
        $path=Image::updateImageEvent($request,$event->id);
        Image::create(['event_id'=>$event_id , 'url'=>"storage/".$path]);
        return redirect('event');
    }

    public function show(Event $event)
    {
        return view('event.event',['event'=>$event]);
    }

    public function edit(Event $event)
    {
        return view('event.edit',['event'=>$event]);
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        $path=Image::updateImageEvent($request,$event->id);
        $event_id=$event->id;
        $image=Image::create(['event_id'=>$event_id , 'url'=>"storage/".$path]);

        
        return redirect("event/$event->id");
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('event');
    }
}
