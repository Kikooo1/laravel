<!-- resources/views/pets/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Pet Information Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Pet ID: <?php echo e($petInfo->pet_id); ?></h5>
            <p class="card-text">Species: <?php echo e($petInfo->species->species_name); ?></p>
            <p class="card-text">Pet Name: <?php echo e($petInfo->pet_name); ?></p>
            <p class="card-text">Owner Name: <?php echo e($petInfo->owner_name); ?></p>
            <p class="card-text">Image: <?php echo e($petInfo->img); ?></p>
        </div>
    </div>
    <?php echo e(var_dump($petInfo->vaccinesAdministered)); ?>

    <?php $__currentLoopData = $petInfo->vaccinesAdministered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaccinesAdministered): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($vaccinesAdministered->vaccine); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(route('pets.index')); ?>" class="btn btn-primary">Back to All Pet Information</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/show.blade.php ENDPATH**/ ?>
