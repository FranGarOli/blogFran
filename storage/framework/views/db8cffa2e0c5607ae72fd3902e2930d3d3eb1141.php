<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $__currentLoopData = $primos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $primo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($primo); ?>

        
        <?php if(!$loop -> last): ?>
            -
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</body>
</html><?php /**PATH /media/fraoli/Seagate Expansion Drive/DAW/DWES/laravel/blogFran/resources/views/primos.blade.php ENDPATH**/ ?>