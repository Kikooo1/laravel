<!-- resources/views/pets/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <!-- pets/index.blade.php -->


<div class="container ">
   <div class="row py-5 ">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="container-fluid d-flex justify-content-between align-items-center">
             <h1>Pets List</h1>
             <a href="<?php echo e(route('pets.create')); ?>" class="btn btn-success mb-3">Add Pet</a>
         </div>
           <table class="table">
               <thead>
               <tr>
                   <th>ID</th>
                   <th>Pet Name</th>
                   <th>Owner Name</th>
                   <th>Species</th>
                   <th>Actions</th>
               </tr>
               </thead>
               <tbody>
               <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                       <td><?php echo e($pet->pet_id); ?></td>
                       <td><?php echo e($pet->pet_name); ?></td>
                       <td><?php echo e($pet->owner_name); ?></td>
                       <td><?php echo e($pet->species->species_name); ?></td>
                       <td>
                           <a href="<?php echo e(route('pets.show', $pet->pet_id)); ?>" class="btn btn-sm btn-info">Show</a>
                           <a href="<?php echo e(route('pets.edit', $pet->pet_id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                           <a href="<?php echo e(route('vaccines_administered.create', $pet->pet_id)); ?>" class="btn btn-sm btn-success">Add Vaccine</a>
                           <a href="<?php echo e(route('history.create', $pet)); ?>" class="btn btn-sm btn-warning">Add History</a>

                           <form action="<?php echo e(route('pets.destroy', $pet->pet_id)); ?>" method="POST" style="display: inline">
                               <?php echo csrf_field(); ?>
                               <?php echo method_field('DELETE'); ?>
                               <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
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

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet\resources\views/pets/index.blade.php ENDPATH**/ ?>