<?php $__env->startSection('titulo', 'Crear un post'); ?>

<?php $__env->startSection('cuerpo'); ?>
<main>
    <h1>Crear un nuevo post</h1><hr>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="title">Título: </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Contenido: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">
        <br>
        <label for="writer">Autor: </label>
        <select name="writer" id="writer">
            <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($autor->id); ?>"><?php echo e($autor->nick); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/posts/create.blade.php ENDPATH**/ ?>