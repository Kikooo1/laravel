<!-- resources/views/pets/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Edit Pet Information</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('pets.update', $petInfo->pet_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="s_id">Species:</label>
            <select name="s_id" id="s_id" class="form-control">
                <?php $__currentLoopData = $species; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($specie->s_id); ?>" <?php echo e($petInfo->s_id == $specie->s_id ? 'selected' : ''); ?>><?php echo e($specie->species_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="pet_name">Pet Name:</label>
            <input type="text" name="pet_name" id="pet_name" class="form-control" value="<?php echo e($petInfo->pet_name); ?>">
        </div>
        <div class="form-group">
            <label for="owner_name">Owner Name:</label>
            <input type="text" name="owner_name" id="owner_name" class="form-control" value="<?php echo e($petInfo->owner_name); ?>">
        </div>
        <div class="form-group">
            <label for="img">Image:</label>
            <input type="text" name="img" id="img" class="form-control" value="<?php echo e($petInfo->img); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Pet Information</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/edit.blade.php ENDPATH**/ ?>
