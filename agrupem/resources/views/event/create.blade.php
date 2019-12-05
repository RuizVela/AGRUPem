<form method="POST" action="/event">
    @csrf
    Titulo catalan: <input required type="text" name="title_catalan"><br>
    Titulo castellano: <input type="text" name="title_spanish"><br>
    Contenido en catalan:<input required type="textarea" name="content_catalan"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish"><br>
    <input required type="date" name="date" value="<?php echo date("Y-m-d");?>">
    <input type="submit" value="Crear Evento" >
</form>