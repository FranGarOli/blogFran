<?php $__env->startSection('titulo', 'Ofertas de empresa'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Ofertas sobre <?php echo e($ofertasEmpresa[0]->company); ?></h1>
    <div>
        <ul>
    <?php $__empty_1 = true; $__currentLoopData = $ofertasEmpresa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oferta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php ($precioDescontado = ($oferta->price - (($oferta->discount / 100) * $oferta->price))); ?>
        <li>
            <a href="/sales/<?php echo e($oferta->id); ?>"><?php echo e($oferta->company); ?> | <?php echo e($oferta->name); ?> | <?php echo e($oferta->price); ?> € - Oferta: <?php echo e($oferta->discount); ?>% -> <?php echo e($precioDescontado); ?>€ hasta <?php echo e($oferta->expires); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
        <h3>No se han encontrado ofertas.</h3>
    <?php endif; ?>
        </ul>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/sales/empresa.blade.php ENDPATH**/ ?>