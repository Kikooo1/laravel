<!-- resources/views/pets/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <!-- pets/create.blade.php -->
    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Add Pet</h1>

                <form action="<?php echo e(route('pets.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-2">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" class="form-control" id="pet_name" name="pet_name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="owner_name">Owner Name</label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="specie_id">Species</label>
                        <select class="form-control" id="specie_id" name="specie_id" required>
                            <?php $__currentLoopData = $species; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($specie->specie_id); ?>"><?php echo e($specie->species_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/create.blade.php ENDPATH**/ ?>