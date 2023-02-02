<?php $__env->startSection('titulo', 'Listado de posts'); ?>

<?php $__env->startSection('cuerpo'); ?>
<div class="cuerpo">
    <h1>Listado de posts</h1>

    <a href="post/1">Post 1</a>
    <a href="post/2">Post 2</a>
    <a href="post/3">Post 3</a>
    <a href="post/4">Post 4</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DAW\DWES\laravel\blogFran\resources\views/posts/listado.blade.php ENDPATH**/ ?>