<?php $__env->startSection('title'); ?> Zaboravljene lozinke <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
        <div class="table-responsive py-4 bg-white">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Korisnik</th>
                    <th scope="col">Datum</th>
                </tr>
                <tr>
                    <div class="container w-100 pb-4">
                        <div class="input-group">
                            <input type="text" name="search" id='search' class="form-control float-right" placeholder="Pretražite korisnike">
                            <div class="input-group-append">
                                <button type="submit" id='search_users' class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="input-group">
                            <p>Broj rezultata: <span id="total_recordss"></span></p>
                        </div>
                    </div>
                </tr>
                </thead>

                <tbody id="table_users">



                </tbody>

            </table>
            <form action="<?php echo e(route('admin.reset.destroy')); ?>" class="text-center" method="post">
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


    </div><!-- /.container-fluid -->

    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/forgot.blade.php ENDPATH**/ ?>