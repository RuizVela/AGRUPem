
@extends('layouts.app')

@section('content')


{{$event->getLocalTitle()}}

<br>{{$event->getLocalContent()}}

@foreach($event->images as $image)
<img src="{{url($image->url)}}" style="max-width:100%">
@endforeach


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

@endsection