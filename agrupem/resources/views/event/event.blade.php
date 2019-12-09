
@extends('layouts.app')

@section('content')


{{$event->getLocalTitle()}}

<br>{{$event->getLocalContent()}}



@auth
    <form action="/event/{{$event->id}}/edit" method="GET">
    <input type="submit" value="Editar">
</form>
<form action="/event/{{$event->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar">
</form>
@endauth 