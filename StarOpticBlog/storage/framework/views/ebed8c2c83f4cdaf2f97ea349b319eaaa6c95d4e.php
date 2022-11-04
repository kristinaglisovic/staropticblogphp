<?php $__env->startSection('title'); ?> Postovi <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 3 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic, blog, posts, postovi <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
            <?php if(session('msg')): ?>
                <div class="alert alert-info text-center"><strong><?php echo e(session('msg')); ?></strong></div>
            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <?php echo $__env->make('front.components.posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <?php echo e($posts->links()); ?>

                </nav>
            </div>
        </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front.postslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/pages/blog/main.blade.php ENDPATH**/ ?>