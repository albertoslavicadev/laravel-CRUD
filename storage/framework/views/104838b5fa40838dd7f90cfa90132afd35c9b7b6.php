 <?php $__env->startSection('content'); ?> <?php echo $__env->make('alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('cars.update', $car)); ?>" method="POST"> <?php echo method_field('PUT'); ?> 
        <?php echo csrf_field(); ?> 
        <input type="text" name="brand"
            value="<?php echo e($car->brand); ?>"> 
        <input type="text" name="model" value="<?php echo e($car->model); ?>"> <button
            type="submit">Submit</button> 
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel-auth-bootstrap\resources\views/cars/edit.blade.php ENDPATH**/ ?>