 <?php echo $__env->make('alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <table class="table car">
        <thead>
            <th>Brand</th>
            <th>Model</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($car->brand); ?></td>
                    <td><?php echo e($car->model); ?></td>
                    <td class="buttons"> 
                        <form class="buttons-form" action="<?php echo e(route('cars.edit', $car)); ?>" method="POST"> <?php echo csrf_field(); ?> <?php echo method_field('GET'); ?> <button
                                type="submit" class="btn btn-primary">Edit</button> </form>
                        <form class="buttons-form" action="<?php echo e(route('cars.show', $car)); ?>" method="POST"> <?php echo csrf_field(); ?> <?php echo method_field('GET'); ?> <button
                            type="submit" class="btn btn-primary">Show</button> </form>
                        <form class="buttons-form" action="<?php echo e(route('cars.destroy', $car)); ?>" method="POST"> <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?> <button
                            type="submit" class="btn btn-danger">Delete</button> </form>
                    </td>
                    </form>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel-auth-bootstrap\resources\views/cars/list.blade.php ENDPATH**/ ?>