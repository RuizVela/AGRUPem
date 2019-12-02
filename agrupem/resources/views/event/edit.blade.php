<form method="POST" action="/event/{{$event->id}}">
    @csrf
    @method("PATCH")
Titulo: <input type="text" name="title" value="{{$event->title}}"><br>
    Contenido en catalan:<input type="textarea" name="content_catalan" value="{{$event->content_catalan}}"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish" value="{{$event->content_spanish}}"><br>
    <input type="date" name="date" value="{{$event->date}}">
    <input type="submit" value="Editar">
</form>