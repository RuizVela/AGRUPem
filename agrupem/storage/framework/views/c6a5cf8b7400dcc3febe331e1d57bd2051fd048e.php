<form method="POST" action="/event/<?php echo e($event->id); ?>"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PATCH"); ?>
    Título catalan: <input type="text" name="title_catalan" value="<?php echo e($event->title_catalan); ?>"><br>
    Título castellano: <input type="text" name="title_spanish" value="<?php echo e($event->title_spanish); ?>"><br>
    Contenido en catalan:<input type="textarea" name="content_catalan" value="<?php echo e($event->content_catalan); ?>"><br>
    Contenido en castellano:<input type="textarea" name="content_spanish" value="<?php echo e($event->content_spanish); ?>"><br>
    <input type="file" class="btn btn-outline-primary mt-4" name="event_image">
    <input type="date" name="date" value="<?php echo e($event->date); ?>">
    <input type="submit" value="Editar"> 
</form><?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/event/edit.blade.php ENDPATH**/ ?>