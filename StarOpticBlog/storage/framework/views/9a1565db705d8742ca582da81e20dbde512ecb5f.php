<!-- Widget [Categories Widget]-->
<div class="widget categories">
    <header>
        <h3 class="h6 text-center">Kategorije</h3>
    </header>
    <?php if(count($posts)==0): ?>

        <div class="item d-flex justify-content-between"><span>Nema nijedna kategorija</span></div>
    <?php else: ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item d-flex justify-content-between"><a href="<?php echo e(route('posts',['category'=>$c->id])); ?>"><?php echo e($c->name); ?></a><span>(<?php echo e(count($c->posts()->where('status','Objavljeno')->get())); ?>)</span></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/front/components/aside/categories.blade.php ENDPATH**/ ?>