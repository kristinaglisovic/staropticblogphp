<?php if(session()->has('user')): ?>
    <div class="add-comment">
        <header>
            <h3 class="h6">Ostavite komentar</h3>
        </header>
        <form action="<?php echo e(route('comment.store')); ?>" method="post" class="commenting-form">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
            <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" name="username" id="username" placeholder="<?php echo e($user->username); ?>" class="form-control" disabled>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="username" id="useremail" placeholder="<?php echo e($user->email); ?> (ne objavljuje se)" class="form-control" disabled>
                </div>
                <div class="form-group col-md-12">
                    <textarea name="comment" id="comment" placeholder="Napišite komentar" class="form-control <?php echo e($errors->has('comment') ? 'novalid' : session('sent')); ?>"><?php echo e(old('comment')); ?></textarea>
                    <?php $__errorArgs = ['comment'];
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
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-secondary">Objavi</button>
                </div>
            </div>
        </form>
        <p class="text-info h3 font-weight-bold"><?php echo e(session('msg')); ?></p>
    </div>
    <?php else: ?>
    <div class="add-comment">
        <header>
            <h3 class="h6">Morate biti ulogovani da biste ostavili komentar!</h3>
        </header>
    </div>
    <?php endif; ?>

    </div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/createComment.blade.php ENDPATH**/ ?>