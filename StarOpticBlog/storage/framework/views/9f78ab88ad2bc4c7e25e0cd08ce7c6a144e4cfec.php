<?php $__env->startSection('title'); ?> Reset Lozinke <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 1 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic,lozinka,reset <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid d-flex vh-100 auth py-5 justify-content-center align-items-center">
        <div class="login-form w-50">
            <form action="/reset-password" method="post">
                <?php echo e(csrf_field()); ?>

                <?php if(session('status')): ?>
                    <div class="alert alert-primary text-center">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <input type="hidden" name="token" value="<?php echo e(Route::input('token')); ?>">
                <h2 class="text-center pb-3">Resetuj lozinku</h2>
                <p class="text-center pb-2">Sva polja su obavezna</p>
                <div class="form-group">
                    <input type="email" class="form-control <?php echo e($errors->has('email') ? 'novalid' :  session('sent')); ?>" placeholder="Email" name="email" value="<?php echo e($email ?? old("email")); ?>">
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
                    <input type="password" class="form-control <?php echo e($errors->has('password') ? 'novalid' :  session('sent')); ?>" placeholder="Nova lozinka" name="password">
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
                    <input type="password" class="form-control <?php echo e($errors->has('password_confirmation') ? 'novalid' :  session('sent')); ?>" placeholder="Potvrdite novu lozinku" name="password_confirmation">
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
                    <button type="submit" class="btn btn-info btn-block">Resetuj lozinku</button>
                </div>
                <div class="form-group text-center">
                    <a class="text-info" href="<?php echo e(route('login')); ?>">Povratak na prethodnu stranu</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.resetpassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/pages/main/password_reset.blade.php ENDPATH**/ ?>