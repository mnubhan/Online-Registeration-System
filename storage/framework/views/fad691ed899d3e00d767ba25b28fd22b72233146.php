<?php echo e(View:: make('title')); ?>


<div class="container">
<?php if(session()->has('user')): ?>
    <?php echo e(View:: make('user')); ?>

<?php else: ?>
    <?php echo $__env->yieldContent('login'); ?>
<?php endif; ?>
</div>

<?php echo e(View:: make('footer')); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/header.blade.php ENDPATH**/ ?>