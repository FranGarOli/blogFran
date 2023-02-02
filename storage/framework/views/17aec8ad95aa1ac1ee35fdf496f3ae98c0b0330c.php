<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $__env->yieldContent('titulo'); ?> </title>
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>

    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('cuerpo'); ?>

    <?php echo $__env->make('partials.pie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH E:\DAW\DWES\laravel\blogFran\resources\views/layout.blade.php ENDPATH**/ ?>