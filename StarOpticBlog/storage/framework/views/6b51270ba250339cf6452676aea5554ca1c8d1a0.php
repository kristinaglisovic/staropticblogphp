<!-- Widget [Search Bar Widget]-->
<div class="widget search">
    <header>
        <h3 class="h6">Pretražite blog</h3>
    </header>
        <form action="" class="search-form">

        <div class="form-group">
            <input type="text" name="keyword" placeholder="Pretazite blog" value="<?php echo e(request()->keyword ?? ''); ?>">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
            <?php $__errorArgs = ['keyword'];
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
        </form>

</div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/aside/searchform.blade.php ENDPATH**/ ?>