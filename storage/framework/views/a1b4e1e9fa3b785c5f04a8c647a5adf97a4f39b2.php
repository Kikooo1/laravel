<!-- resources/views/pets/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <!-- vaccines_administered/create.blade.php -->
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2>Add Vaccine for <?php echo e($pet->pet_name); ?></h2>

                <form action="<?php echo e(route('vaccines_administered.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="pet_id" value="<?php echo e($pet->pet_id); ?>">

                    <div class="form-group mb-2">
                        <label for="vaccine_id">Vaccine</label>
                        <select class="form-control" id="vaccine_id" name="vaccine_id" required>
                            <?php $__currentLoopData = $vaccines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaccine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($vaccine->vaccine_id); ?>"><?php echo e($vaccine->vaccine_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <!-- Add other fields as needed -->

                    <button type="submit" class="btn btn-primary">Add Vaccine</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/vaccines_administered/create.blade.php ENDPATH**/ ?>