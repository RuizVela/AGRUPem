@extends('layouts.app')

@section('content')


@foreach ($events as $event)
Evento: {{$event->getLocalTitle()}} Fecha: {{$event->startDate}}
<form action="/event/{{$event->id}}" method="GET">
<input type="submit" value="Mostrar Evento">
</form>
<br>
@endforeach
@endsection