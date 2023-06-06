<?php $__env->startSection('content'); ?><!-- vaccines/show.blade.php -->


<div class="container">
    <div class="row py-5 ">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <h1><?php echo e($vaccine->vaccine_name); ?></h1>

            <p>ID: <?php echo e($vaccine->vaccine_id); ?></p>
            <p>Name: <?php echo e($vaccine->vaccine_name); ?></p>

            <a href="<?php echo e(route('vaccines.edit', $vaccine->vaccine_id)); ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo e(route('vaccines.destroy', $vaccine->vaccine_id)); ?>" method="POST" style="display: inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this vaccine?')">Delete</button>
            </form>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/vaccines/show.blade.php ENDPATH**/ ?>