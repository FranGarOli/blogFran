<?php $__env->startSection('titulo', 'Ficha oferta'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Oferta <?php echo e($sale->first()->name); ?></h1>
    <br>
    <!-- <h3><a href="/sale/<?php echo e($id); ?>/editar">Editar post </a></h3> -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/sales/show.blade.php ENDPATH**/ ?>