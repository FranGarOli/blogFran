<?php $__env->startSection('titulo', 'Listado de ofertas'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Listado de ofertas</h1>

    <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php ($precioDescontado = ($sale->price - (($sale->discount / 100) * $sale->price))); ?>
        <a href="sales/<?php echo e($sale->id); ?>"><?php echo e($sale->company); ?> | <?php echo e($sale->name); ?> | <?php echo e($sale->price); ?> € - Oferta: <?php echo e($sale->discount); ?>% -> <?php echo e($precioDescontado); ?>€ hasta <?php echo e($sale->expires); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No hay ofertas.
    <?php endif; ?>

    <div class="links">
        <?php echo e($sales->links()); ?>

    </div>
</main>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DAW\DWES\laravel\blogFran\resources\views/sales/index.blade.php ENDPATH**/ ?>