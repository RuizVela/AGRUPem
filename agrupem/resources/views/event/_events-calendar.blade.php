<section id="home_calendar_container">
    <div style="width: 50%">
        @include('event.calendar')
    </div>
</section>
<section id="home_events_container">
    @php
        $count = 0;
    @endphp
    @foreach ($events as $event)
        @break($count == 4)
        Evento: {{$event->getLocalTitle()}} Fecha: {{$event->startDate}}
        <form action="/event/{{$event->id}}" method="GET">
            <input type="submit" value="Mostrar Evento">
        </form>
        <br>
    @php
        $count++;
    @endphp
    @endforeach
</section>