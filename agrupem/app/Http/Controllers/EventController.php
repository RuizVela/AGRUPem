<?php

namespace App\Http\Controllers;

use App\Event;
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
        Event::create($request->all());
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
        return redirect("event/$event->id");
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    }
}
