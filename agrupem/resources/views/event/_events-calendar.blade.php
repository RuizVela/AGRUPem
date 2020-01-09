<section id="home_calendar_container">
    <div>
        @include('event.calendar')
    </div>
</section>
<section>
    <div id="home_event_title">
        <h1>Proximos Eventos</h1>
    </div>
    <div id="home_events_container" >
            <div class="next_events_container">
            @foreach ($events as $event)
            {{$event->startDate}}
            <h3> {{$event->getLocalTitle()}}</h3>
            <form action="/event/{{$event->id}}" method="GET">
                <input type="submit" value="Mostrar Evento">
            </form>
            <br>
            @endforeach
            </div>
    </div>
</section>