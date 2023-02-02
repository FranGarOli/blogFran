<?php $__env->startSection('titulo', 'Listado de autores'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Autores</h1><hr>

    <div class="contenido">
        <?php $__empty_1 = true; $__currentLoopData = $writers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $writer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('writers.show' , ['writer' => $writer->id])); ?>"><?php echo e($writer->nick); ?> - <?php echo e($writer->email); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            No hay autores.
        <?php endif; ?>
    </div>
    

    <div class="links">
        <?php echo e($writers->links()); ?>

    </div>
</main>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/writers/index.blade.php ENDPATH**/ ?>