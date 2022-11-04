<?php $__env->startSection('title'); ?> Prijavi se <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 1 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic,korisnik,log-in,prijava <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid d-flex auth py-5 justify-content-center align-items-center">
    <div class="login-form w-50">
        <form action="<?php echo e(route("loginUser")); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2 class="text-center pb-3">Prijavi se</h2>
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
                <button type="submit" class="btn btn-info btn-block">Prijavi se</button>
            </div>
            <div class="form-group text-center">
                <p class="pt-2"><a href="<?php echo e(route('register')); ?>">Napravi nalog</a></p>
                <p><a href="<?php echo e(route('password.request')); ?>" class="">Zaboravio/la sam lozinku?</a></p>
            </div>
        </form>
        <?php if(Session::has('fail')): ?>
            <div class="alert alert-danger text-center"><?php echo e(Session::get('fail')); ?></div>
        <?php endif; ?>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/pages/main/login.blade.php ENDPATH**/ ?>