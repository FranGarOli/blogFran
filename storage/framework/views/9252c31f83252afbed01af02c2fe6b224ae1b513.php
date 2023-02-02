<link rel="stylesheet" href="css/estilo.css">

<?php $__env->startSection('titulo', 'Listado de posts'); ?>

<?php $__env->startSection('cuerpo'); ?>
<h1>Listado de posts</h1>

<a href="post/1">Post 1</a>
<a href="post/2">Post 2</a>
<a href="post/3">Post 3</a>
<a href="post/4">Post 4</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fraoli/Laravel/blogFran/resources/views/posts/listado.blade.php ENDPATH**/ ?>