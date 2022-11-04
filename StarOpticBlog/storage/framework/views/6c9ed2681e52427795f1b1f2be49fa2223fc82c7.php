<?php $__env->startSection('title'); ?> Kontakt <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12 col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Poruke</h3>
                        </div>
                        <div class="card-body p-0">

                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Obriši</th>
                                        <th>Ime i Prezime</th>
                                        <th>Poruka</th>
                                        <th>Broj telefona</th>
                                        <th>Email</th>
                                        <th>Primljeno</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($messages)==0): ?>
                                           <td><strong>Trenutno nema nijedna poruka</strong></td>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                       <form action="<?php echo e(route("contact.destroy",$m)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <input type="submit" class="btn btn-danger" value="Obriši">
                                            </form></td>
                                        <td class="mailbox-name"><?php echo e($m->first_name); ?> <?php echo e($m->last_name); ?></td>
                                        <td class="mailbox-subject"><?php echo e($m->message); ?>

                                        </td>
                                        <td class="mailbox-attachment"><?php echo e($m->phone); ?></td>
                                        <td class="mailbox-attachment"><?php echo e($m->email); ?></td>
                                        <td class="mailbox-date"><?php echo e($m->created_at->diffForHumans()); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                    <div class="container text-center pb-4">
                        <form action="<?php echo e(route('contact.truncate')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <input type="submit" class="btn btn-danger" value="Obriši sve">
                        </form>
                    </div>
                    <?php if(session('msg')): ?>
                        <div class="alert alert-success">
                            <p class="text-white text-center pt-2"><?php echo e(session('msg')); ?></p>
                        </div>

            <?php endif; ?>
            <!-- /.row -->

        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/admin/pages/contact.blade.php ENDPATH**/ ?>