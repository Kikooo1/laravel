<!-- resources/views/species/show.blade.php -->



<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
            <h1>Species Details</h1>

            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($species->species_name); ?></h5>
                </div>
            </div>

            <a href="<?php echo e(route('species.index')); ?>" class="btn btn-primary">Back to All Species</a>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/species/show.blade.php ENDPATH**/ ?>