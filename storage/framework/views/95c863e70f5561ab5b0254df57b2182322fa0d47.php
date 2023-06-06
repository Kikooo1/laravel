<!-- resources/views/pets/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <!-- pets/show.blade.php -->
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="text-uppercase"><?php echo e($pet->pet_name); ?></h1>

                        <p>ID: <?php echo e($pet->pet_id); ?></p>
                        <p>Owner: <?php echo e($pet->owner_name); ?></p>
                        <p>Species: <?php echo e($pet->species->species_name); ?></p>
                        <img src="<?php echo e($pet->img); ?>" width="300">
                        <!-- Display other fields as needed -->

                    </div>
                   <div>
                       <a href="<?php echo e(route('pets.edit', $pet)); ?>" class="btn btn-sm btn-primary">Edit</a>

                       <form action="<?php echo e(route('pets.destroy', $pet)); ?>" method="POST" style="display: inline">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('DELETE'); ?>
                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
                       </form>
                   </div>
                </div>

                <h5 class="mt-2">Vaccines Administered</h5>
                <?php if($pet->vaccinesAdministered->isEmpty()): ?>
                    <p>No vaccines administered for this pet.</p>
                <?php else: ?>
                    <ul>
                        <?php $__currentLoopData = $pet->vaccinesAdministered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaccinesAdministered): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($vaccinesAdministered->vaccine->vaccine_name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

                <h5 class="mt-2">History</h5>
                <?php if($pet->histories->isEmpty()): ?>
                    <p>No history available for this pet.</p>
                <?php else: ?>
                    <ul>
                        <?php $__currentLoopData = $historiesWithReasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <em>Reason of Visit:</em> <?php echo e($history['reasonOfVisit']); ?> <br>
                                <em>Weight (kg):</em> <?php echo e($history['weight_kg']); ?> <br>
                                <em>Date Visited:</em> <?php echo e($history['date_visited']); ?> <br>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/show.blade.php ENDPATH**/ ?>