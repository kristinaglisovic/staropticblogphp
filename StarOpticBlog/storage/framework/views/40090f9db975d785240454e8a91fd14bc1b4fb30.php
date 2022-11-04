<?php $__env->startSection('title'); ?> Početna <?php $__env->stopSection(); ?>
<?php $__env->startSection('pagedescription'); ?> Page Description 1 <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> staroptic,dioptrija,blog,optika <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Hero Section-->
    <section
        style="background: url(<?php echo e(asset('assets/img/hero.jpg')); ?>); background-size: cover; background-position: center center;"
        class="hero shadow">
        <?php if(session('error')): ?>
            <div class="alert alert-danger text-center"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pozadina p-4">
                    <h1 class="pb-4">StarOptik Blog</h1>
                    <h2>Sve što treba da čujete, a možda niste znali o naočarima i vidu</h2><a href="<?php echo e(route('posts')); ?>"
                                                                                               class="hero-link">Saznaj
                        više</a>
                </div>
            </div>
            <a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
        </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
        <div class="container shadow-sm">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="h2 py-3 text-center"><img src="<?php echo e(asset('assets/img/pngegg.png')); ?>" class="img-fluid"></h2>
                    <p class="text-big">Kada pitate nekoga šta prvo primeti na nekoj osobi, često se čuje odgovor: OČI.</p>
                    <p class="text-big">Obično se misli na boju očiju, oblik oka ili slično. </p>
                    <p class="text-big">Skoro pa nikada ne pomislimo da je to ustvari jedan od najvažnijih čula čoveka.</p>
                    <p class="text-big mb-4 ">Ono što je činjenica a koju često ne znamo je da mi gledamo mozgom a da oči sprovode informacije do
                        njega.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-posts no-padding-top">
             <div class="container">
                <?php echo $__env->make('front.components.indexpost', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
    </section>
    <!-- Divider Section-->
    <section
        style="background: url(<?php echo e(asset("assets/img/divider-bg.jpg")); ?>); background-size: cover; background-position: center bottom"
        class="divider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-5 text-right">
                    <h2>SVAKE NAOČARE TREBA DA BUDU LAGANE, UDOBNE ZA NOŠENJE, <br> I DA SE PRE SVEGA VAMA SVIĐAJU.</h2>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/pages/main/index.blade.php ENDPATH**/ ?>