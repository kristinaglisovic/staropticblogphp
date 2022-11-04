<!DOCTYPE html>

<html lang="en">

<?php echo $__env->make('admin.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php echo $__env->make('admin.components.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.components.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $__env->make('admin.components.pageheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


         <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- /.content-wrapper -->

    <?php echo $__env->make('admin.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->


<?php echo $__env->make('admin.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('CDN'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/layouts/admin/admin-dash-layout.blade.php ENDPATH**/ ?>