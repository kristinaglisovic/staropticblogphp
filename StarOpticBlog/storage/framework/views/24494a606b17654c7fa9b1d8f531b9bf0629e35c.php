<?php $__currentLoopData = $pocetna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i==1): ?>
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-5"><img class="img-fluid" src="<?php echo e(asset("assets/img/featured-pic-".$p['slika'])); ?>"
                                                  alt="<?php echo e($p['alt']); ?>"></div>
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <div class="category pb-2"><strong><?php echo e($p['naslov']); ?></strong></div>
                                <h2 class="h4"><?php echo e($p['podnaslov']); ?></h2>
                            </header>
                            <p><?php echo e($p["text"]); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif($i==0 || $i==2): ?>
            <div class="row d-flex align-items-stretc">
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <div class="category pb-2"><strong><?php echo e($p['naslov']); ?></strong></div>
                                <h2 class="h4"><?php echo e($p['podnaslov']); ?></h2>
                            </header>
                            <p><?php echo e($p["text"]); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5"><img class="img-fluid" src="<?php echo e(asset("assets/img/featured-pic-".$p['slika'])); ?>"
                                                 alt="<?php echo e($p['alt']); ?>"></div>
            </div>


        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/indexpost.blade.php ENDPATH**/ ?>