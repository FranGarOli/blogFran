<?php $__env->startSection('titulo', 'Autor '.$writer->nick); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1><?php echo e($writer->nick); ?> - <?php echo e($writer->email); ?></h1>

    <div class="contenido">
        <?php $__empty_1 = true; $__currentLoopData = $writer->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <?php if($post->visible == 1): ?>
                <a href="<?php echo e(route('posts.show' , ['post' => $post->id])); ?>"><?php echo e($post->title); ?></a>
            <?php else: ?>
                <p><?php echo e($post->title); ?> - NO ESTÁ VISIBLE</p>
            <?php endif; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            No hay posts del autor <?php echo e($writer->nick); ?>.

        <?php endif; ?>
    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/writers/show.blade.php ENDPATH**/ ?>