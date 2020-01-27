<section id="home_calendar_container" class="col-md-6 d-flex justify-content-center align-items-center col-sm-12">
    <div>
        @include('event.calendar')
    </div>
</section>
<section class="col-md-6 justify-content-center col-sm-12 mb-5">
    <div id="home_event_title">
        <h3>@lang('home.events')</h3>
    </div>
    <div id="home_events_container" >
            <div class="next_events_container">
            @foreach ($events as $event)
                {{$event->startDate}}
                <h3> {{$event->getLocalTitle()}}</h3>
                <form action="/event/{{$event->id}}" method="GET">
                    <input class="btn btn-primary" type="submit" value="Mostrar Evento">
                </form>
                <br>
            @endforeach
            </div>
            @auth
                <form method="GET" action="/event/create">
                    <input type="submit" class="btn btn-success" value="Nuevo Evento">
                </form>
            @endauth
    </div>
</section>