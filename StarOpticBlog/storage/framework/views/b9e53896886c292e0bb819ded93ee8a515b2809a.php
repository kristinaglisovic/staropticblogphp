<?php $__env->startSection('title'); ?> Kreiranje postova <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
        <?php if(session('msg')): ?>
        <div class="alert alert-success">
            <p class="text-white text-center pt-2"><?php echo e(session('msg')); ?></p>
        </div>
        <?php endif; ?>
        <div class="container-fluid">
            <form action="<?php echo e(route('post.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="main_photo">Glavna slika *</label>
                        <div class="container-fluid">
                            <img id="mainp" alt="upload preview" width="100" height="100"/>
                            <input type="file" name="main_photo" id="main_photo"
                                   onchange="document.getElementById('mainp').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <?php $__errorArgs = ['main_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                
                <div class="form-group py-5">
                    <h3>Kategorija *</h3>
                    <div>
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option selected disabled>Izaberite kategoriju</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  <?php echo e((old("category_id") == $category->id ? "selected":"")); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                    <div class="form-group">
                        <label for="title">Naslov *</label>
                        <input type="text" class="form-control
                               <?php echo e($errors->has('title') ? 'novalid' :  session('sent')); ?>" id="title" name="title"
                               placeholder="Naslov" value="<?php echo e(old('title')); ?>">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="main_text"><span>Glavni tekst *</span></label>
                        <textarea id="main_text" name="main_text" class="w-100" rows="5" ><?php echo e(old('main_text')); ?></textarea>
                        <?php $__errorArgs = ['main_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Podnaslov *</label>
                        <input type="text" value="<?php echo e(old('subtitle')); ?>" class="form-control  <?php echo e($errors->has('subtitle') ? 'novalid' :  session('sent')); ?>" id="subtitle" name="subtitle" placeholder="Podnaslov">
                        <?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="form-group">
                        <label for="subtitle_text_1"><span>Podnaslov tekst 1 *</span></label>
                        <textarea id="subtitle_text_1" class="w-100" rows="5" name="subtitle_text_1"><?php echo e(old('subtitle_text_1')); ?></textarea>
                        <?php $__errorArgs = ['subtitle_text_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="quote">Citat</label>
                        <input type="text" value="<?php echo e(old('quote')); ?>" class="form-control" id="quote" name="quote" placeholder="Citat">
                        <?php $__errorArgs = ['quote'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="subtitle_text_2"><span>Podnaslov tekst 2</span></label>
                        <textarea id="subtitle_text_2" class="w-100" rows="5" name="subtitle_text_2"><?php echo e(old('subtitle_text_2')); ?></textarea>
                        <?php $__errorArgs = ['subtitle_text_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kreiraj post</button>
                </div>
            </form>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('CDN'); ?>
    <script>
        CKEDITOR.replace('main_text');
        CKEDITOR.replace('subtitle_text_1');
        CKEDITOR.replace('subtitle_text_2');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-dash-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StarOpticBlog - Copy - Copy - Copy (2) OVAJ\resources\views/admin/pages/create_post.blade.php ENDPATH**/ ?>