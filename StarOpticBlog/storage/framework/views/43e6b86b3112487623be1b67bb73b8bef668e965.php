<?php if(count($povezaniPostovi)>0): ?>
<section class="latest-posts shadow-sm" id="relPosts">
    <div class="container">
        <header>
            <h2>Povezani postovi</h2>
        </header>
        <div class="row">
            <?php $__currentLoopData = $povezaniPostovi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="post col-md-4 col-lg-4">
                <div class="post-thumbnail"><a href="<?php echo e(route('post',$pp)); ?>"><img src="<?php echo e(asset('assets/postImages/'.$pp['main_photo'])); ?>" alt="<?php echo e($pp['alt']); ?>" class="relPosts"/></a></div>
                <div class="post-details">
                        <h3 class="h4"><?php echo e($pp['title']); ?></h3>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/recentPosts.blade.php ENDPATH**/ ?>