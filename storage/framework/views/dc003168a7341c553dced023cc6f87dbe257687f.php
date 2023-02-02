<?php $__env->startSection('titulo', 'Edición de posts'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Edición del post <?php echo e($id); ?></h1>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/posts/edit.blade.php ENDPATH**/ ?>