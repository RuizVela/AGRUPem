<form method="POST" action="/event/{{$event->id}}">
    @csrf
    @method("PATCH")
    Título catalan: <input type="text" name="title_catalan" value="{{$event->title_catalan}}"><br>
    Título castellano: <input type="text" name="title_spanish" value="{{$event->title_spanish}}"><br>
    Contenido en catalan:<input type="textarea" name="content_catalan" value="{{$event->content_catalan}}"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish" value="{{$event->content_spanish}}"><br>
    <input type="date" name="date" value="{{$event->date}}">
    <input type="submit" value="Editar">
</form>