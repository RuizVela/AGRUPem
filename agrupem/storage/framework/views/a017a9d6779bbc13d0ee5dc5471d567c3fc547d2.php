<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Recursos</div>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/resource/<?php echo e($resource->id); ?>" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <section class="flex-column p-2">
                        <div>
                            <label for="resource_title">Títol</label>
                            <input id="resource_title" type="text" name="title_catalan" value="<?php echo e($resource->title_catalan); ?>"></input>
                        </div>
                        <div>
                            <label for="resource_title">Título</label>
                            <input id="resource_title" type="text" name="title_spanish" value="<?php echo e($resource->title_spanish); ?>"></input>
                        </div>
                        <div>
                            <label for="resource_url">Url</label>
                            <textarea id="resource_url" name="url" cols="60" rows="1"><?php echo e($resource->url); ?></textarea>
                        </div>
                    </section>
                    <input type="submit" class="btn btn-outline-success mt-4" value="Guardar">
                    </form>
                </section>
            </main>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/resource/edit.blade.php ENDPATH**/ ?>