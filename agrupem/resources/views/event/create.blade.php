<form method="POST" action="/event" enctype="multipart/form-data">
    @csrf
    Título catalan: <input required type="text" name="title_catalan"><br>
    Título castellano: <input type="text" name="title_spanish"><br>
    Contenido en catalan:<input required type="textarea" name="content_catalan"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish"><br>
    <input type="file" class="btn btn-outline-primary mt-4" name="event_image">

    <input required type="date" name="date" value="<?php echo date("Y-m-d");?>">
    <input type="submit" value="Crear Evento" >
</form>