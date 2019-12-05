@foreach ($events as $event)
Evento: {{$event->title}} Fecha: {{$event->date}}
<form action="/event/{{$event->id}}" method="GET">
<input type="submit" value="Mostrar Evento">
</form>
<br>
@endforeach
