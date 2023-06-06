<!-- vaccines/edit.blade.php -->



<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <h1>Edit Vaccine</h1>

                <form action="<?php echo e(route('vaccines.update', $vaccine->vaccine_id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group mb-2">
                        <label for="vaccine_name">Vaccine Name</label>
                        <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" value="<?php echo e($vaccine->vaccine_name); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/vaccines/edit.blade.php ENDPATH**/ ?>