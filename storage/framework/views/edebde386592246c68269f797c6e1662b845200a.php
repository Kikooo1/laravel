<!-- vaccines/index.blade.php -->



<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>


                <div class="d-flex justify-content-between align-items-center">
                    <h1>Vaccine List</h1>

                    <a href="<?php echo e(route('vaccines.create')); ?>" class="btn btn-success mb-3">Add Vaccine</a>
                </div>


                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $vaccines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaccine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($vaccine->vaccine_id); ?></td>
                            <td><?php echo e($vaccine->vaccine_name); ?></td>
                            <td>
                                <a href="<?php echo e(route('vaccines.show', $vaccine->vaccine_id)); ?>" class="btn btn-sm btn-info">Show</a>
                                <a href="<?php echo e(route('vaccines.edit', $vaccine->vaccine_id)); ?>" class="btn  btn-sm btn-primary">Edit</a>
                                <form action="<?php echo e(route('vaccines.destroy', $vaccine->vaccine_id)); ?>" method="POST" style="display: inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn  btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this vaccine?')">Delete</button>
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

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/vaccines/index.blade.php ENDPATH**/ ?>