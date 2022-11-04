<?php $__env->startSection('title'); ?> Autor <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 3 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic, autor <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div id="intro" class="auth">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="container py-5 d-flex align-items-center justify-content-center flex-column text-center h-100">
                <img src="<?php echo e(asset("assets/img/author.png")); ?>" class="img-fluid shadow" alt="pageauthor"/>
                <div class="text-white py-3">
                    <h1 class="mb-3">Kristina Glišović</h1>
                    <h5 class="mb-4">Moje ime je Kristina i ja sam kreator ovog sajta. Trenutno sam student na Visokoj ICT školi, gde se trudim da unapredim svoje sposobnosti i znanje u oblasti IT-a.</h5>
                    <a class="btn btn-info btn-lg m-2" href="https://kimaportfolio.netlify.app/" role="button"
                       rel="nofollow" target="_blank">Portfolio</a>
                    <a class="btn btn-warning btn-lg m-2" href="<?php echo e(asset('docs.pdf')); ?>" role="button"
                       rel="nofollow" target="_blank">Dokumentacija</a>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/pages/main/author.blade.php ENDPATH**/ ?>