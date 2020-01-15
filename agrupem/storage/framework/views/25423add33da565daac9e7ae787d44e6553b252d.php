<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
            <?php echo $__env->make('_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="home_central_container" class="d-flex flex-wrap">
                <div id="home_left_central_container" class="col-sm-12 col-md-6 mt-5">
                    <?php echo $__env->make('_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <img id="inline_home" src="<?php echo e(asset('/images/inline.jpg')); ?>" alt="">
                    <?php echo $__env->make('novelty._novelties', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('_personal-assitance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div id="home_right_central_container" class="col-sm-12 col-md-6 mb-5">
                        <form method="GET" action="/event/create">
                            <input type="submit" value="Nuevo Evento"></form>
                    <?php echo $__env->make('event._events-calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php echo $__env->make('_blog-entries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('_collaborators', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/home.blade.php ENDPATH**/ ?>