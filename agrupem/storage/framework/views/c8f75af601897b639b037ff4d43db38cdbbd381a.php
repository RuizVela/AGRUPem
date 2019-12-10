<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
        
            <section class="card">
                <h3 id="title_catalan"><?php echo e($novelty->title_catalan); ?></h3>
                <p id="content_catalan"><?php echo e($novelty->content_catalan); ?></p>
            </section>
                <?php $__currentLoopData = $novelty->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(url($image->url)); ?>" style="max-width:100%">
                <!-- TODO poner estilos en app.css -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <a id="button_return" href="/novelty" class="btn btn-outline-success mt-4">Volver Novedades</a>
            </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/novelty/novelty.blade.php ENDPATH**/ ?>