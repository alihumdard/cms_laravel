<?php $__env->startSection('buttons'); ?><div class="btn-group"><button type="submit" class="btn btn-success px-5"><i class="fa fa-save"></i> <?php echo e(trans('cms::app.save')); ?> </button> <button type="button" class="btn btn-warning cancel-button px-3"><i class="fa fa-refresh"></i> <?php echo e(trans('cms::app.reset')); ?> </button></div> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?><div class="row"><div class="col-md-9"> <?php $__env->startComponent('cms::components.card', [
                'label' => trans('cms::app.information')
            ]); ?><div class="row mb-2"><div class="col-md-12"><?php echo e(Field::text($model, 'title', [
                            'required' => true,
                            'class' => empty($model->slug) ? 'generate-slug' : '',
                        ])); ?></div></div> <?php echo $__env->make($editor, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->renderComponent(); ?> <?php
                /** @var \Illuminate\Support\Collection $setting */
                $metas = collect_metas($setting->get('metas'))
                            ->where('sidebar', false)
                            ->where('visible', true)
                            ->toArray();
            ?> <?php $__currentLoopData = $metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
                    $meta['name'] = "meta[{$name}]";
                    $meta['data']['value'] = $model->getMeta($name);
                ?> <?php echo e(Field::fieldByType($meta)); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php echo e(Field::render($setting->get('fields', []), $model)); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('post_type.'. $postType .'.form.left', $model); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('post_types.form.left', $model); ?></div><div class="col-md-3"><?php $__env->startComponent('cms::components.card', [
                'label' => trans('cms::app.status')
            ]); ?> <?php echo e(Field::select($model, 'status', [
                    'options' => $model->getStatuses()
                ])); ?> <?php echo $__env->renderComponent(); ?> <?php echo e(Field::image($model, 'thumbnail')); ?> <?php
                $metas = collect_metas($setting->get('metas'))
                    ->where('sidebar', true)
                    ->where('visible', true)
                    ->toArray();
            ?> <?php $__currentLoopData = $metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
                    $meta['name'] = "meta[{$name}]";
                    $meta['data']['value'] = $model->getMeta($name);
                ?> <?php echo e(Field::fieldByType($meta)); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php echo e(Field::slug($model, 'slug')); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('post_types.form.right', $model); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('post_type.'. $postType .'.form.right', $model); ?></div></div> <?php $__env->stopSection(); ?> <?php echo $__env->make('cms::layouts.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/post/form.blade.php ENDPATH**/ ?>