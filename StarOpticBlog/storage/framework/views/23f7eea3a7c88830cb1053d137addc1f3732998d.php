<?php $__env->startSection('title'); ?> Post <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagekeywords'); ?> post,blog,staroptic <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page desc 1 <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($post->status=='Objavljeno'): ?>
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
        <?php if(session()->has('user')): ?>
            <?php $user=session()->get('user'); ?>
            <?php if($user->role_id == 1): ?>
                <div class="container d-flex justify-content-between mb-2">
                    <a class="btn btn-info" href="<?php echo e(route('post.edit',$post)); ?>">Izmeni</a>
                    <form action="<?php echo e(route("post.delete",$post)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" class="btn btn-danger" value="Obriši">
                    </form>
                </div>
            <?php endif; ?>

        <?php endif; ?>
        <div class="container">
            <div class="post-single">
                <div class="post-thumbnail"><img src="<?php echo e(asset('assets/postImages/'.$post['main_photo'])); ?>" alt="<?php echo e($post['alt']); ?>" class="img-fluid"></div>
                <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                        <div class="category"><a href="#relPosts"><?php echo e($post->category->name); ?></a> </div>
                    </div>
                    <h1><?php echo e($post['title']); ?></h1>
                    <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><div class="author d-flex align-items-center flex-wrap">
                            <div class="title"><span>Autor: <?php echo e($post->user->username); ?></span></div></div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="date"><i class="icon-clock"></i><?php echo e($post['created_at']->diffForHumans()); ?></div>
                            <div class="views"><i class="icon-eye"></i> <?php echo e($post->visit_count); ?></div>
                            <div class="comments meta-last"><i class="icon-comment"></i><?php echo e(count($comments)); ?></div>
                        </div>
                    </div>
                    <div class="post-body">
                        <p class="lead"><?php echo $post['main_text']; ?></p>
                        <h3><?php echo e($post['subtitle']); ?></h3>
                        <p><?php echo $post['subtitle_text1']; ?></p>
                        <?php if($post['quote']!=null): ?>
                        <blockquote class="blockquote">
                            <p><?php echo e($post['quote']); ?></p>

                        </blockquote>
                        <?php endif; ?>
                        <p><?php echo $post['subtitle_text2']; ?></p>
                    </div>
                    <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                            <?php if($prethodniPost!=null): ?>
                            <a href="<?php echo e(route('post',$prethodniPost)); ?>" class="prev-post text-left d-flex align-items-center">
                            <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                            <div class="text"><strong class="text-primary">Prethodni post</strong>
                                <h6><?php echo e($prethodniPost->title); ?></h6>
                            </div></a>
                                <?php endif; ?>
                                <?php if($sledeciPost!=null): ?>
                            <a href="<?php echo e(route('post',['post'=>$sledeciPost])); ?>" class="next-post text-right d-flex align-items-center justify-content-end">
                            <div class="text"><strong class="text-primary">Sledeći post</strong>
                                <h6><?php echo e($sledeciPost->title); ?></h6>
                            </div>
                            <div class="icon next"><i class="fa fa-angle-right"></i></div></a>
                                  <?php endif; ?>
                    </div>
                    <?php echo $__env->make('front.components.recentPosts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="post-comments">
                        <header>
                            <h3 class="h6">Komentari<span class="no-of-comments">(<?php echo e(count($comments)); ?>)</span></h3>
                        </header>
                        <?php if(count($comments)>0): ?>
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="comment">
                            <div class="comment-body">
                                    <div class="title"><strong><?php echo e($comm->user->username); ?></strong><span class="date"><?php echo e($comm->created_at); ?></span></div>
                                <p><?php echo e($comm->comment); ?></p>
                                <?php if($user->role_id==1 || $comm->user->id==$user->id): ?>
                                <form action="<?php echo e(route('comment.destroy.front',$comm)); ?>" method="post">
                                    <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><input type="submit" class="btn mali text-info" name="obrisiKomentar" value="Obriši"/>
                                </form>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p class="font-weight-bold">Ne postoji nijedan komentar za ovaj post.</p>
                        <?php endif; ?>


                    </div>
                    <?php echo $__env->make('front.components.createComment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </main>
    <?php else: ?>
        <main class="post blog-post col-lg-8">
        <div class="alert alert-info text-dark text-center"><p>Post ne možete ga videti jer ne postoji ili nije objavljen.</p></div>
        </main>
    <?php endif; ?>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.front.postslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/pages/blog/single-blog-post.blade.php ENDPATH**/ ?>