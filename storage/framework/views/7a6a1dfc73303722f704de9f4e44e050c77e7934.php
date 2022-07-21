<?php echo $__env->make('alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('cars.store')); ?>" method="POST"> 
    <?php echo csrf_field(); ?> 
    <input type="text" name="brand" placeholder="Brand">
    <input type="text" name="model" placeholder="model"> 
    <button type="submit">Submit</button> 
</form>
<?php /**PATH C:\xampp\htdocs\laravel\laravel-auth-bootstrap\resources\views/cars/create.blade.php ENDPATH**/ ?>