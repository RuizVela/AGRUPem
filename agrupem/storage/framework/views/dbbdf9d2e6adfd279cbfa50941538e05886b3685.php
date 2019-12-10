<?php $__env->startSection('content'); ?> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">AGRUPem Blog</div>
            </header>
            <main>
            <section class="card">

                <h2 id="title"><?php echo e($post->getLocalTitle()); ?></h2>
                <?php echo html_entity_decode($post->getLocalContent()); ?>


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
                <a id="button_return" href="/post" class="btn btn-outline-success mt-4">Volver index</a>
            </section>
            </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/blog/post.blade.php ENDPATH**/ ?>