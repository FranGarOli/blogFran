<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background : beige;
        }
        .contenedor{
            display : flex; 
            margin : 2em auto;
            justify-content : space-around;
        }

        .libro{
            padding : 1em; 
            border : 1px solid black;
            background : white;
            margin-right : 1em;
            text-align : center;
        }
    </style>
</head>
<body>

    <div class="contenedor">
    <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="libro">
            <h2><?php echo e($libro['titulo']); ?></h2>
            <p><?php echo e($libro['autor']); ?> - <?php echo e($libro['anyo']); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No hay más libros.</p>
    <?php endif; ?>
    </div>

    <!-- <?php echo $__env->renderEach('partials.fichalibro', $libros, 'libro'); ?> -->

</body>
</html><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/libros.blade.php ENDPATH**/ ?>