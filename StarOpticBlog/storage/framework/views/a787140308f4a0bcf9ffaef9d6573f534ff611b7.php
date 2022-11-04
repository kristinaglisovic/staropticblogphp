<?php $__env->startSection('title'); ?> Postovi i komentari <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
            <div class="table-responsive py-4 bg-white">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Korisnik</th>
                        <th scope="col">Post</th>
                        <th scope="col">Post ID</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Izbriši</th>
                        <th scope="col">Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(count($comments)==0): ?>
                        <tr>
                            <td><strong>Trenutno nema komentara<strong></td></tr>
                    <?php else: ?>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($c->id); ?></th>
                            <td><?php echo e($c->user->username); ?></td>
                            <td><?php echo e($c->post->title); ?></td>
                            <td><?php echo e($c->post->id); ?></td>
                            <td><?php echo e($c->comment); ?></td>
                            <td><form action="<?php echo e(route("comment.destroy",$c)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" class="btn btn-danger" value="Obriši">
                            </form></td>
                            <td><a href="<?php echo e(route('post',$c->post)); ?>" class="btn btn-info">Pogledaj</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php if(session('msg')): ?>
            <div class="alert alert-success">
                <p class="text-white text-center pt-2"><?php echo e(session('msg')); ?></p>
            </div>
        <?php endif; ?>
        <h3 class="pt-5 pb-2">Postovi</h3>
        <div class="table-responsive py-4 bg-white">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naslov</th>
                    <th scope="col">Broj komentara</th>
                    <th scope="col">Broj pregleda</th>
                    <th scope="col">Status</th>
                    <th scope="col">Obriši</th>
                    <th scope="col">Promeni status</th>
                    <th scope="col">Pogledaj</th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($posts)==0): ?>
                    <tr>
                        <td><strong>Trenutno nema postova</strong></td></tr>
                <?php else: ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($p->id); ?></th>
                        <td><?php echo e($p->title); ?></td>
                        <td><?php echo e(count($p->comments)); ?></td>
                        <td><?php echo e($p->visit_count); ?></td>
                        <td><?php echo e($p->status); ?></td>
                        <td><form action="<?php echo e(route("post.back.delete",$p)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" class="btn btn-danger" value="Obriši">
                            </form></td>
                        <td><a href="<?php echo e(route('post.status',$p)); ?>" class="btn btn-warning">Promeni status</a></td>
                        <?php if($p->status=='Objavljeno'): ?>
                        <td><a href="<?php echo e(route('post',$p)); ?>" class="btn btn-info">Pogledaj</a></td>
                        <?php else: ?>
                            <td>Prvo objavite post da biste ga videli</td>
                        <?php endif; ?>


                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </tbody>
            </table>


        </div>
        <?php if(session('msg2')): ?>
            <div class="alert alert-success">
                <p class="text-white text-center pt-2"><?php echo e(session('msg2')); ?></p>
            </div>
        <?php endif; ?>


    </div><!-- /.container-fluid -->

    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/comments.blade.php ENDPATH**/ ?>