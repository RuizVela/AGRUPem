<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">AGRUPem Blog</div>
            </header>
            <main>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="card">
                <h2 id="title"><?php echo e($post->getLocalTitle()); ?></h2>
                <p id="content"><?php echo Str::words($post->getLocalContent(), 10,"..."); ?></p>
                <!-- TODO posicionamiento de la imagen -->

                <form action="/post/<?php echo e($post->id); ?>" method="GET">
                    <input type="submit" id="button_show" class = "btn btn-outline-primary mt-4" value="Ver Mas">
                </form>

                <?php if(auth()->guard()->check()): ?>
                <form action="/post/<?php echo e($post->id); ?>/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/post/<?php echo e($post->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?> 
                <input id="button_delete" type="submit" value="Eliminar post" class="btn btn-outline-danger mt-4">
                </form>
                <?php endif; ?>
            </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            <?php if(auth()->guard()->check()): ?>
            <a id="button_create" href="/post/create" class="btn btn-outline-success mt-4">Crear post</a>
            <?php endif; ?>    
        </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/blog/index.blade.php ENDPATH**/ ?>