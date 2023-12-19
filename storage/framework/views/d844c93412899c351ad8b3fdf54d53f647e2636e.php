<?php $__env->startSection('content'); ?><form action="" method="post" class="form-ajax"><div class="row"><div class="col-md-6"></div><div class="col-md-6 text-right"><div class="btn-group"><button type="submit" class="btn btn-success px-5"><i class="fa fa-save"></i> <?php echo e(trans('cms::app.save')); ?> </button> <button type="button" class="btn btn-warning cancel-button px-3"><i class="fa fa-refresh"></i> <?php echo e(trans('cms::app.reset')); ?> </button></div></div></div><div class="row"><div class="col-md-8"><?php $__currentLoopData = $configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
                        $config['data']['value'] = get_theme_config($config['name']);
                        $config['name'] = "theme[{$config['name']}]";
                    ?> <?php echo e(Field::fieldByType($config)); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div><div class="col-md-4"><?php echo e(Field::image(trans('cms::app.logo'), 'config[logo]', [
                    'value' => get_config('logo')
                ])); ?> <?php echo e(Field::image(trans('cms::app.icon'), 'config[icon]', [
                    'value' => get_config('icon')
                ])); ?></div></div></form> <?php $__env->stopSection(); ?> <?php echo $__env->make('cms::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/appearance/setting/index.blade.php ENDPATH**/ ?>