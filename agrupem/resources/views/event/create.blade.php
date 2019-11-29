<form method="POST" action="/event">
    @csrf
    Titulo: <input type="text" name="title"><br>
    Contenido en catalan:<input type="textarea" name="content_catalan"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish"><br>
    <input type="date" name="date">
    <input type="submit" value="Crear Evento">
</form>