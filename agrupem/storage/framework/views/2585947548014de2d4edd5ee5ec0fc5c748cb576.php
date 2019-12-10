<?php $__env->startSection('content'); ?>


<?php echo e($event->getLocalTitle()); ?>


<br><?php echo e($event->getLocalContent()); ?>


Título: <?php echo e($event->title); ?>

<table border="1px">
<tr><td>Catalan <br><?php echo e($event->content_catalan); ?></td>
    <td>Castellano <br><?php echo e($event->content_spanish); ?></td></tr>
    
</table>
<?php $__currentLoopData = $event->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(url($image->url)); ?>" style="max-width:100%">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(auth()->guard()->check()): ?>
    <form action="/event/<?php echo e($event->id); ?>/edit" method="GET">
    <input type="submit" value="Editar">
</form>
<form action="/event/<?php echo e($event->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <input type="submit" value="Eliminar">
</form>
<?php endif; ?> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/event/event.blade.php ENDPATH**/ ?>