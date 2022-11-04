<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <!-- post -->

    <div class="post col-xl-6">
        <?php if(session()->has('user')): ?>
            <?php $user=session()->get('user') ?>
            <?php if($user->role_id == 1): ?>
        <div class="container d-flex justify-content-between mb-2">
            <a class="btn btn-info" href="<?php echo e(route('post.edit',$p)); ?>">Izmeni</a>
            <form action="<?php echo e(route('post.delete',$p)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="submit" class="btn btn-danger" value="Obriši">
            </form>
        </div>
            <?php endif; ?>

            <?php endif; ?>

        <div class="post-thumbnail"><a href="<?php echo e(route('post',$p)); ?>"><img src="<?php echo e(asset('assets/postImages/'.$p['main_photo'])); ?>" alt="<?php echo e($p['alt']); ?>" class="postImg"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date meta-last"><?php echo e($p['updated_at']->diffForHumans()); ?></div>
                <div class="category"><p><?php echo e($p->category->name); ?></p></div>
            </div><a href="<?php echo e(route('post',$p)); ?>">
                <h3 class="h4"><?php echo e($p['title']); ?></h3></a>
            <p class="text-muted"><?php echo str_limit($p['main_text'],90); ?></p>
            <footer class="post-footer d-flex align-items-center"><div class="author d-flex align-items-center flex-wrap">
                    <div class="title"><span><?php echo e($p->user->username); ?></span></div></div>
                <div class="date"><i class="icon-clock"></i><?php echo e($p['created_at']->diffForHumans()); ?></div>
                <div class="views"><i class="icon-eye"></i> <?php echo e($p->visit_count); ?></div>
                <div class="comments meta-last"><i class="icon-comment"></i><?php echo e(count($p->comments()->get())); ?></div>
            </footer>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="alert-info container text-center mb-4"><h4 class="py-3"><strong>Ne postoji nijedan post za zadatu pretragu</strong></h4></div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/components/posts.blade.php ENDPATH**/ ?>