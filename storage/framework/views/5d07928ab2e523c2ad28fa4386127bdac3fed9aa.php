<?php $__env->startSection('titulo', 'Ficha post'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1><?php echo e($post->title); ?></h1>
    <div>
        <p><?php echo e($post->content); ?></p>
        <br>
        <p><?php echo e($post->created_at); ?> - Autor: <?php echo e($post->writer->nick); ?></p>
    </div>
    <br>

    <div class="acciones">
        <h3><a href="<?php echo e(route('posts.edit', ['post' => $post->id])); ?>">Editar post </a></h3>
        <form action="<?php echo e(route('posts.destroy', ['post' => $post->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Borrar post">
        </form>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/posts/show.blade.php ENDPATH**/ ?>