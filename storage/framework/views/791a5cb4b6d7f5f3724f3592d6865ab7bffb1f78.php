<!-- resources/views/pets/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2>Edit Pet</h2>

                <form action="<?php echo e(route('pets.update', $pet)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group mb-2">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" class="form-control" id="pet_name" name="pet_name" value="<?php echo e($pet->pet_name); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="owner_name">Owner Name</label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name" value="<?php echo e($pet->owner_name); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" required value="<?php echo e($pet->img); ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="specie_id">Species</label>
                        <select class="form-control" id="specie_id" name="specie_id" required>
                            <?php $__currentLoopData = $species; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($specie->specie_id); ?>" <?php echo e($specie->specie_id == $pet->specie_id ? 'selected' : ''); ?>>
                                    <?php echo e($specie->species_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/edit.blade.php ENDPATH**/ ?>