<?php $__env->startSection('title'); ?> Kontakt <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 2 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic,kontakt,message,poruka <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="p-lg-4 text-center auth" id="contact">
        <div class="container bg-light shadow-sm pt-2 pb-5">
            <h2 class="mb-4 pt-3">Kontakt</h2>

            <ul class="fa-ul mb-4 ml-0">
                <li id="mail-address">
                    <i class="fa fa-google mr-2 contact-icons"></i>office@staroptic.rs</a>
                </li>
                <li>
                    <i class="fa fa-phone mr-2 contact-icons"></i>+381 64 6689 857
                </li>
                <li>
                    <i class="fa fa-map-pin mr-2 contact-icons"></i>Raše Plaovića 2, 11160 Beograd
                </li>
            </ul>

            <p>
                Ili nas kontaktirajte putem poruke, a mi ćemo Vam odgovoriti u najkraćem mogućem roku.
            </p>

            <form class="contact-form d-flex flex-wrap align-items-center justify-content-center"
                  action="<?php echo e(route('contactSend')); ?>" method="POST">
               <?php echo csrf_field(); ?>
                <div class="form-group maximize mr-4">
                    <input type="text" class="form-control <?php echo e($errors->has('firstname') ? 'novalid' :  session('sent')); ?> " placeholder="Ime *" value="<?php echo e(old('firstname')); ?>" name="firstname"/>
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
                <div class="form-group maximize">
                    <input type="text" class="form-control <?php echo e($errors->has('lastname') ? 'novalid' : session('sent')); ?>" placeholder="Prezime *" value="<?php echo e(old('lastname')); ?>" name="lastname"/>
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
                <div class="form-group w-75">
                    <input type="text" class="form-control <?php echo e($errors->has('phone') ? 'novalid' : session('sent')); ?>" placeholder="Telefon(opciono)" value="<?php echo e(old('phone')); ?>" name="phone"/>
                    <?php $__errorArgs = ['phone'];
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
                <div class="form-group w-75">
                    <input type="text" class="form-control <?php echo e($errors->has('email') ? 'novalid' : session('sent')); ?>" placeholder="Email *" value="<?php echo e(old('email')); ?>" name="email"/>
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
                <div class="form-group w-75">
                    <textarea class="form-control <?php echo e($errors->has('message') ? 'novalid' : session('sent')); ?>" type="text" placeholder="Poruka *" rows="7"  name="message"><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
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

                <button type="submit" class="btn btn-info w-75">Pošalji</button>

            </form>
            <p class="text-success pt-2"><?php echo e(session('msg')); ?></p>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/pages/main/contact.blade.php ENDPATH**/ ?>