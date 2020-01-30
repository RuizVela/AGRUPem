<form method="POST" action="/event/{{$event->id}}"  enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    Título catalan: <input type="text" name="title_catalan" value="{{$event->title_catalan}}"><br>
    Título catalan: <input type="text" name="title_spanish" value="{{$event->title_spanish}}"><br>
    Contenido en catalan:<input type="textarea" name="content_catalan" value="{{$event->content_catalan}}"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish" value="{{$event->content_spanish}}"><br>
    <input type="file" class="btn btn-outline-primary mt-4" name="image">
    <input type="date" name="startDate" value="{{$event->startDate}}">
    <input type="date" name="endDate" value="{{$event->endDate}}">
    <input type="submit" value="Editar"> 
</form>
<form method="POST" action="/event/deleteImage/{{$event->id}}">
    @csrf
    <input type="submit" value="Borrar imagen">  
</form>