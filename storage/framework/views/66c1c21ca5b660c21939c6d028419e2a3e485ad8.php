<?php $__env->startSection('titulo', 'Listado de posts'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Listado de posts</h1>

    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="<?php echo e(route('posts.show' , ['post' => $post->id])); ?>">Autor: <?php echo e($post->writer->nick); ?> - <?php echo e($post->title); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No hay posts.
    <?php endif; ?>

    <div class="links">
        <?php echo e($posts->links()); ?>

    </div>
</main>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/posts/index.blade.php ENDPATH**/ ?>