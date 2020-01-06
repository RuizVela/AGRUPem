<section id="home_calendar_container">
    <div>
        @include('event.calendar')
    </div>
</section>
<section id="home_events_container">
    
    @foreach ($events as $event)
        Evento: {{$event->getLocalTitle()}} Fecha: {{$event->startDate}}
        <form action="/event/{{$event->id}}" method="GET">
            <input type="submit" value="Mostrar Evento">
        </form>
        <br>
    @endforeach
</section>