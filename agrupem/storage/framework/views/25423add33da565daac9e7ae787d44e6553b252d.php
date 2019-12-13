<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novedades</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <?php $__currentLoopData = $novelties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$novelty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
                            <div class="carousel-item <?php if($index==0): ?>active <?php endif; ?>">
                             <?php echo e($novelty->getLocalTitle()); ?>   
                            <?php if($novelty->image): ?>
                            <img src="<?php echo e(url($novelty->image->url)); ?>" class="d-block w-100" alt="placeholder">
                            <?php endif; ?>
                            <?php echo e($novelty->getLocalContent()); ?>  
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/home.blade.php ENDPATH**/ ?>