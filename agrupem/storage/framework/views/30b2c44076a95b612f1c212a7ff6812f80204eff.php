<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/novelty" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <section class="flex-column p-2">
                        <div>
                            <label for="novelties_title">Títol</label>
                            <input id="novelties_title" type="text" name="title_catalan"></input>
                        </div>
                        <div>
                            <label for="novelties_content_catalan">Contingut</label>
                            <textarea id="novelties_content_catalan" name="content_catalan" cols="60" rows="1"></textarea>
                        </div>

                        <div>
                            <label for="novelties_title">Título</label>
                            <input id="novelties_title" type="text" name="title_spanish"></input>
                        </div>
                        <div>
                            <label for="novelties_content_spanish">Contenido</label>
                            <textarea id="novelties_content_spanish" name="content_spanish" cols="60" rows="1"></textarea>
                        </div>
                        <div>
                         <input type="file" class="btn btn-outline-primary mt-4" name="novelty_image">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agrupem\agrupem\resources\views/novelty/create.blade.php ENDPATH**/ ?>