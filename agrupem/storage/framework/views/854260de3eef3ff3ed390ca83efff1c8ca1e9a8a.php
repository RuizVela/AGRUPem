<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Recursos</div>
            </header>
            <main>
            <?php $__currentLoopData = $resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="card">
                <a id="resource_link" href="<?php echo e($resource->url); ?>"><?php echo e($resource->title_catalan); ?></a>
                <?php if(auth()->guard()->check()): ?>
                <form action="/resource/<?php echo e($resource->id); ?>/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/resource/<?php echo e($resource->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>
                <?php endif; ?> 
            </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(auth()->guard()->check()): ?>
            <a id="button_create" href="/resource/create" class="btn btn-outline-success mt-4">Crear</a>
        <?php endif; ?>    
        </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/resource/index.blade.php ENDPATH**/ ?>