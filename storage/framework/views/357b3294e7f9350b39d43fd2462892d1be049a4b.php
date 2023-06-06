<?php $__env->startSection('content'); ?>
<!-- vaccines/create.blade.php -->

<div class="container">
    <div class="row py-5 ">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h1>Add Vaccine</h1>

            <form action="<?php echo e(route('vaccines.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="vaccine_name">Vaccine Name</label>
                    <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/vaccines/create.blade.php ENDPATH**/ ?>