<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
            <?php $__currentLoopData = $novelties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novelty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="card">
                <h3 id="title_catalan"><?php echo e($novelty->title_catalan); ?></h3>
                <p id="content_catalan"><?php echo Str::words($novelty->content_catalan, 20,"..."); ?></p>
                
                <form action="/novelty/<?php echo e($novelty->id); ?>" method="GET">
                    <input type="submit" id="button_show" class = "btn btn-outline-primary mt-4" value="Ver Mas">
                </form>
                <?php if(auth()->guard()->check()): ?>
                <form action="/novelty/<?php echo e($novelty->id); ?>/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/novelty/<?php echo e($novelty->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>
                <?php endif; ?>  
            </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(auth()->guard()->check()): ?>
            <a id="button_create" href="/novelty/create" class="btn btn-outline-success mt-4">Crear</a>
            <?php endif; ?> 
        </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/novelty/index.blade.php ENDPATH**/ ?>