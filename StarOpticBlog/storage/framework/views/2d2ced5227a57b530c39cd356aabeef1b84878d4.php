<?php $__env->startSection('title'); ?> Kreiranje admina <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-lg-12 col-md-12">
                    <!-- jquery validation -->
                    <div class="container-fluid">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route("registerAdmin")); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" class="form-control <?php echo e($errors->has('firstname') ? 'novalid' :  session('sent')); ?>" placeholder="Ime" name="firstname" value="<?php echo e(old("firstname")); ?>">
                                <?php $__errorArgs = ['firstname'];
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
                            <div class="form-group">
                                <input type="text" class="form-control <?php echo e($errors->has('lastname') ? 'novalid' :  session('sent')); ?>" placeholder="Prezime" name="lastname" value="<?php echo e(old("lastname")); ?>">
                                <?php $__errorArgs = ['lastname'];
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
                            <div class="form-group">
                                <input type="text" class="form-control <?php echo e($errors->has('username') ? 'novalid' :  session('sent')); ?>" placeholder="Korisničko ime" name="username" value="<?php echo e(old("username")); ?>">
                                <?php $__errorArgs = ['username'];
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
                            <div class="form-group">
                                <input type="email" class="form-control <?php echo e($errors->has('email') ? 'novalid' :  session('sent')); ?>" placeholder="Email" name="email" value="<?php echo e(old("email")); ?>">
                                <?php $__errorArgs = ['email'];
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
                            <div class="form-group">
                                <input type="password" class="form-control <?php echo e($errors->has('password') ? 'novalid' :  session('sent')); ?>" placeholder="Lozinka" name="password">
                                <?php $__errorArgs = ['password'];
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
                            <div class="form-group">
                                <input type="password" class="form-control <?php echo e($errors->has('password_confirmation') ? 'novalid' :  session('sent')); ?>" placeholder="Potvrdite lozinku" name="password_confirmation">
                                <?php $__errorArgs = ['password_confirmation'];
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


                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block">Napravi admina</button>
                            </div>
                        </form>

                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success text-center pt-2"><?php echo e(Session::get('success')); ?></div>
                        <?php endif; ?>
                        <?php if(Session::has('fail')): ?>
                            <div class="alert alert-danger text-center pt-2"><?php echo e(Session::get('fail')); ?></div>
                        <?php endif; ?>
                    </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        <!-- /.container-fluid -->
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/admin-create.blade.php ENDPATH**/ ?>