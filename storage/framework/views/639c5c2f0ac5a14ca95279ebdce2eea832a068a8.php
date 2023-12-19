<div class="m-3 d-block d-lg-none"><h1 style="font-size: 1.5rem;">File Manager</h1><div class="row mt-3"><div class="col-4"><img src="<?php echo e(asset('jw-styles/juzaweb/images/logo.svg')); ?>" class="w-100" alt="Juzaweb logo" /></div><div class="col-8"><p>Current usage:</p><p><?php echo e(format_size_units($storage)); ?> (Max: <?php echo e(format_size_units($total), 0); ?>)</p></div></div><div class="progress mt-3" style="height: .5rem;"><div class="progress-bar progress-bar-striped progress-bar-animated bg-main" role="progressbar" aria-valuenow="<?php echo e(round($storage / $total, 2)); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(round($storage / $total, 2)); ?>%;"></div></div></div><ul class="nav nav-pills flex-column"> <?php $__currentLoopData = $root_folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $root_folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-type="0" data-path="<?php echo e($root_folder->url); ?>"><i class="fa fa-folder fa-fw"></i> <?php echo e($root_folder->name); ?> </a></li> <?php $__currentLoopData = $root_folder->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="nav-item sub-item"><a class="nav-link" href="javascript:void(0)" data-type="0" data-path="<?php echo e($directory->url); ?>"><i class="fa fa-folder fa-fw"></i> <?php echo e($directory->name); ?> </a></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/filemanager/tree.blade.php ENDPATH**/ ?>