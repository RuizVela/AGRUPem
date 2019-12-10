Título: {{$event->title}}
<table border="1px">
<tr><td>Catalan <br>{{$event->content_catalan}}</td>
    <td>Castellano <br>{{$event->content_spanish}}</td></tr>
    
</table>
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

{{-- TODO: preguntar david por el if --}}