
<h3 class="text-center py-5">Dostupne kategorije</h3>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kategorija</th>
            <th scope="col">Izmeni</th>
            <th scope="col">Izbriši</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($categories)==0): ?>
            <tr>
                <td><strong>Trenutno nema nijedna kreirana kategorija</strong></td></tr>
        <?php else: ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($c->id); ?></th>
                <td><?php echo e($c->name); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('categories.edit',$c)); ?>">Izmeni</a></td>
                <td><form action="<?php echo e(route('categories.destroy',$c)); ?> " method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" class="btn btn-danger" value="Obriši">
                    </form></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/admin/components/available-categories.blade.php ENDPATH**/ ?>