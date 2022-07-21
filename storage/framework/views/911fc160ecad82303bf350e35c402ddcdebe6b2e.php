<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p class="mb-0"><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\laravel-auth-bootstrap\resources\views/alerts.blade.php ENDPATH**/ ?>