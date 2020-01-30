 
<?php $__env->startSection('content'); ?>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center mb-5">
            <?php echo $__env->make('novelty._novelties', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div id="home_central_container" class="mb-4">
            <div class="container d-flex col-md-12 flex-wrap justify-content-around">
                <?php echo $__env->make('event._events-calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('_blog-entries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-8 col-md-8">
            <?php echo $__env->make('_personal-assitance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('_collaborators', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/home.blade.php ENDPATH**/ ?>