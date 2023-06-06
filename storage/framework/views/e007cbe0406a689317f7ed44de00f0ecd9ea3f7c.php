<!-- resources/views/species/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Create New Species</h1>

                <form action="<?php echo e(route('species.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-2">
                        <label for="species_name">Species Name:</label>
                        <input type="text" name="species_name" id="species_name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Species</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/species/create.blade.php ENDPATH**/ ?>