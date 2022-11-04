<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dash')); ?>" class="brand-link">
        <img src="<?php echo e(asset('assets/img/logo1.PNG
')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <?php $user=session()->get('user');?>
            <div class="info">
                <span class="d-block text-white">Ime: <?php echo e($user->username); ?></span>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <?php use App\Models\AdminMenu; $adminMenu=AdminMenu::all();?>
                        <?php $__currentLoopData = $adminMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route($m['route'])); ?>" class="nav-link <?php if(request()->routeIs($m['route'])): ?> active <?php endif; ?>">
                                <i class="<?php echo e($m['icon']); ?>"></i>
                                <p><?php echo e($m['name']); ?></p>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/components/aside.blade.php ENDPATH**/ ?>