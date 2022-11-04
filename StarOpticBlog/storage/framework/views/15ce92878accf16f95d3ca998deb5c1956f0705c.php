<?php $__env->startSection('title'); ?> Reset Link <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 1 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic,lozinka,reset,email <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid vh-100 d-flex auth py-5 justify-content-center align-items-center">
        <div class="login-form w-50">
            <form action="<?php echo e(route('password.email')); ?>" method="post">
               <?php echo csrf_field(); ?>
                <?php if(session('status')): ?>
                    <div class="alert alert-primary text-center">
                        <?php echo e(session('status')); ?>

                        <p>!!!!! VAŽNO: Ako ne vidite link u <strong>INBOX-u</strong>, proverite <strong>SPAM</strong> folder !!!!!</p>
                    </div>

                <?php endif; ?>
                <h2 class="text-center pb-1">Zaboravio/la sam lozinku</h2>
                <p class="text-center pb-2">Upišite Vašu e-mail adresu</p>
                <div class="form-group">
                    <input type="email" class="form-control <?php echo e($errors->has('email') ? 'novalid' :  session('sent')); ?>" placeholder="E-mail" name="email" value="<?php echo e(old("email")); ?>">
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
                    <button type="submit" class="btn btn-info btn-block">Pošalji link za reset lozinke</button>
                </div>
                <div class="form-group text-center">
                <a class="text-info" href="<?php echo e(route('login')); ?>">Povratak na prethodnu stranu</a>
                </div>
            </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.resetpassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/pages/main/password_reset_email.blade.php ENDPATH**/ ?>