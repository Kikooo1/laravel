<!-- resources/views/pets/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>All Pet Information</h1>

    <a href="<?php echo e(route('pets.create')); ?>" class="btn btn-primary">Create New Pet Information</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Species</th>
            <th>Pet Name</th>
            <th>Owner Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $petInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($petInfo->pet_id); ?></td>
                <td><?php echo e($petInfo->species->species_name); ?></td>
                <td><?php echo e($petInfo->pet_name); ?></td>
                <td><?php echo e($petInfo->owner_name); ?></td>
                <td><?php echo e($petInfo->img); ?></td>
                <td>
                    <a href="<?php echo e(route('pets.show', $petInfo->pet_id)); ?>" class="btn btn-info">View</a>
                    <a href="<?php echo e(route('pets.edit', $petInfo->pet_id)); ?>" class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('pets.destroy', $petInfo->pet_id)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this pet information?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/index.blade.php ENDPATH**/ ?>
