<?php $__env->startSection('title'); ?> Izmena kategorija <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
        <?php if(session('msg')): ?>
            <div class="alert alert-success">
                <p class="text-white text-center pt-2"><?php echo e(session('msg')); ?></p>
            </div>
        <?php endif; ?>
        <div class="container-fluid">
            <form action="<?php echo e(route('categories.update',$category)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="card-body">
                    <h3>Izmena kategorije</h3>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($category->name); ?>" class="form-control <?php echo e($errors->has('category') ? 'novalid' :  session('sent')); ?>" id="category" name="category" placeholder="Ime kategorije">
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Izmeni kategoriju</button>
                </div>
            </form>

            <?php echo $__env->make('admin.components.available-categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/edit-categories.blade.php ENDPATH**/ ?>