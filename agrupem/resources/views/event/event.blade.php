Título: {{$event->title}}
<table border="1px">
<tr><td>Catalan <br>{{$event->content_catalan}}</td>
    <td>Castellano <br>{{$event->content_spanish}}</td></tr>
</table>
<form action="/event/{{$event->id}}/edit" method="GET">
    <input type="submit" value="Editar">
</form>
<form action="/event/{{$event->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar">
</form>