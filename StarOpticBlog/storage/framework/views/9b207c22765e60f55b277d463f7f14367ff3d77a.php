<?php $__env->startSection('title'); ?> Registrovani korisnici <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <!-- /.card-header -->
                    
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Uloga</th>
                                <th>Izbriši</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($users)==0): ?>
                                <tr>
                                    <td><strong>Trenutno nema nijedan registrovan korisnik</strong></td></tr>
                            <?php else: ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($u->id); ?></td>
                                <td><?php echo e($u->first_name); ?></td>
                                <td><?php echo e($u->last_name); ?></td>
                                <td><?php echo e($u->username); ?></td>
                                <td><?php echo e($u->email); ?></td>
                                <td>
                                    <form action="<?php echo e(route('update.role')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="userId" value="<?php echo e($u->id); ?>">
                                    <select class="form-select" name="roleUser" aria-label="Default select example">
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($u->role_id==$r->id): ?>
                                                <option selected value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <input type="submit" class="ml-3 btn btn-warning" value="Promeni ulogu">
                                    </form>
                                    <td>
                                        <form action="<?php echo e(route("user.destroy",$u)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <input type="submit" class="btn btn-danger" value="Obriši">
                                        </form>
                                    </td>

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

                    <?php if(count($admins)==0): ?>
                        <td>U bazi mora postojati bar jedan admin i ne može se obrisati</td>
                    <?php else: ?>


                    
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Uloga</th>
                                <th>Izbriši</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($u->id); ?></td>
                                        <td><?php echo e($u->first_name); ?></td>
                                        <td><?php echo e($u->last_name); ?></td>
                                        <td><?php echo e($u->username); ?></td>
                                        <td><?php echo e($u->email); ?></td>

                                        <td>
                                            <form action="<?php echo e(route('update.role')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="userId" value="<?php echo e($u->id); ?>">
                                                <select class="form-select" name="roleUser" aria-label="Default select example">
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($u->role_id==$r->id): ?>
                                                            <option selected value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                  <?php if(count($admins)==1): ?>
                                                     <td><strong>U bazi mora postojati bar 1 admin i ne može se promeniti uloga.</strong></td>
                                                   <?php else: ?>
                                                   <input type="submit" class="ml-3 btn btn-warning" value="Promeni ulogu">
                                                  <?php endif; ?>
                                            </form>

                                        <?php if(count($admins)==1): ?>
                                            <td><strong>U bazi mora postojati bar 1 admin i ne može se obrisati.</strong></td>
                                         <?php else: ?>
                                        <td>
                                            <form action="<?php echo e(route("user.destroy",$u)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <input type="submit" class="btn btn-danger" value="Obriši">
                                            </form>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div>

    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/registeredUsers.blade.php ENDPATH**/ ?>