<!-- resources/views/pets/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <h2>Add History for <?php echo e($pet->pet_name); ?></h2>

                <form action="<?php echo e(route('history.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="pet_id" value="<?php echo e($pet->pet_id); ?>">

                    <div class="form-group mb-2">
                        <label for="reason_of_visit">Reason of Visit</label>
                        <input type="text" class="form-control" id="reason_of_visit" name="reason_of_visit" required>
                    </div>

                    <div class="form-groupmb-2">
                        <label for="weight_kg">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight_kg" name="weight_kg" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="date_visited">Date Visited</label>
                        <input type="datetime-local" class="form-control" id="date_visited" name="date_visited" required>
                    </div>

                    <!-- Add other fields as needed -->

                    <button type="submit" class="btn btn-primary">Add History</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/history/create.blade.php ENDPATH**/ ?>