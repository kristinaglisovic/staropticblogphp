<!-- Widget [Latest Posts Widget]        -->
<div class="widget latest-posts">
    <header>
        <h3 class="h4">Skorašnje objave</h3>
    </header>
    <?php if(count($latestPosts)==0): ?>

        <div><p class="font-weight-bold">Nema kreiranih postova</p></div>
    <?php else: ?>
    <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="blog-posts shadow-sm">
            <a href="<?php echo e(route('post',$lp)); ?>">
            <div class="item d-flex align-items-center">
                <div class="image m-3"><img src="<?php echo e(asset('assets/postImages/'.$lp->main_photo)); ?>" alt="<?php echo e($lp->alt); ?>" class="img-fluid"></div>
                <div><p class="font-weight-bold"><?php echo e($lp->title); ?></p>
                        <div class="date"><i class="icon-clock"></i><span class="maliFont"><?php echo e($lp['created_at']->diffForHumans()); ?></span></div>
                </div>
            </div>
            </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/aside/latestposts.blade.php ENDPATH**/ ?>