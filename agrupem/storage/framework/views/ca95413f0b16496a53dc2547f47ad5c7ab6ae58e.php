<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
Evento: <?php echo e($event->title); ?> Fecha: <?php echo e($event->date); ?>

<form action="/event/<?php echo e($event->id); ?>" method="GET">
<input type="submit" value="Mostrar Evento">
</form>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/event/calendar.blade.php ENDPATH**/ ?>