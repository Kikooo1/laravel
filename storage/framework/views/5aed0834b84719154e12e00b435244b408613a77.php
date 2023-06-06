<!-- resources/views/species/index.blade.php -->



<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <!-- resources/views/species/index.blade.php -->
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>


                <div class="d-flex justify-content-between align-items-center">
                   <h1>All Species</h1>

                   <a href="<?php echo e(route('species.create')); ?>" class="btn btn-primary">Create New Species</a>
               </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $species; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($specie->specie_id); ?></td>
                            <td><?php echo e($specie->species_name); ?></td>
                            <td>
                                <a href="<?php echo e(route('species.show', $specie->specie_id)); ?>" class="btn btn-sm btn-info">View</a>
                                <a href="<?php echo e(route('species.edit', $specie->specie_id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                                <form action="<?php echo e(route('species.destroy', $specie->specie_id)); ?>" method="POST" style="display:inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this species?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/species/index.blade.php ENDPATH**/ ?>