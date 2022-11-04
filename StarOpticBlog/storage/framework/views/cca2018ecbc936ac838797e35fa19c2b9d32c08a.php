<!DOCTYPE html>
<html>
<?php echo $__env->make('front.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('front.fixed.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container">
    <div class="row">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('front.components.aside.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<?php echo $__env->make('front.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/layouts/front/postslayout.blade.php ENDPATH**/ ?>