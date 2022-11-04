<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand -->
                <a href="<?php echo e(route('home')); ?>" class="navbar-brand"><img src="<?php echo e(asset("assets/img/logo1.PNG")); ?>" alt="logo" class="img-fluid"> </a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item"><a href="<?php echo e(route($m['route'])); ?>" class="nav-link <?php if(request()->routeIs($m['route'])): ?> active <?php endif; ?>"><?php echo e($m['name']); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(session()->has('user')): ?>
                            <?php $user=session()->get('user') ?>
                      <?php if($user->role_id == 1): ?>

                                <li class="nav-item"><a href="<?php echo e(route('admin.dash')); ?>" class="nav-link">Admin Panel</a>
                                </li>

                      <?php endif; ?>
                          <li class="nav-item"><a href="<?php echo e(route('logout')); ?>" class="nav-link">Odjavi se</a>
                          </li>
                      <?php else: ?>
                           <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item"><a href="<?php echo e(route('login')); ?>" class="nav-link">Prijava</a>
                            <li class="nav-item"><a href="<?php echo e(route('register')); ?>" class="nav-link">Registracija</a>
                            <?php endif; ?>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/front/fixed/navigation.blade.php ENDPATH**/ ?>