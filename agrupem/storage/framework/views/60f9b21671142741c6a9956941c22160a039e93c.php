<?php $__env->startSection('content'); ?>


<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
Evento: <?php echo e($event->getLocalTitle()); ?> Fecha: <?php echo e($event->date); ?>

<form action="/event/<?php echo e($event->id); ?>" method="GET">
<input type="submit" value="Mostrar Evento">
</form>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/event/calendar.blade.php ENDPATH**/ ?>