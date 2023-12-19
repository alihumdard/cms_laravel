<div class="form-group form-taxonomy"><label class="col-form-label w-100"><?php echo e($taxonomy->get('label')); ?> <span> <a href="javascript:void(0)" class="float-right add-new"><i class="fa fa-plus"></i> <?php echo e(trans('cms::app.add_new')); ?> </a></span></label> <select class="form-control load-taxonomies select-tags" data-placeholder="--- <?php echo e($taxonomy->get('label')); ?> ---" data-post-type="<?php echo e($taxonomy->get('post_type')); ?>" data-type="<?php echo e($taxonomy->get('type')); ?>" data-taxonomy="<?php echo e($taxonomy->get('taxonomy')); ?>" data-explodes="<?php echo e($taxonomy->get('taxonomy')); ?>-explode"></select><div class="show-tags mt-2"><?php
            $items = $model->taxonomies()
                ->where('taxonomy', '=', $taxonomy->get('taxonomy'))
                ->get();
        ?> <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__env->startComponent('cms::components.tag-item', [
                'name' => $taxonomy->get('taxonomy'),
                'item' => $item
            ]); ?> <?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div><div class="form-add mt-2 form-add-taxonomy box-hidden"><div class="form-group mb-1"><label class="col-form-label"><?php echo e(trans('cms::app.name')); ?></label> <input type="text" class="form-control taxonomy-name" autocomplete="off"></div> <?php if(in_array('hierarchical', $taxonomy->get('supports', []))): ?><div class="form-group mb-1"><label class="col-form-label"><?php echo e(trans('cms::app.parent')); ?></label> <select type="text" class="form-control taxonomy-parent load-taxonomies" autocomplete="off" data-post-type="<?php echo e($taxonomy->get('post_type')); ?>" data-taxonomy="<?php echo e($taxonomy->get('taxonomy')); ?>"></select></div> <?php endif; ?> <button type="button" class="btn btn-primary mt-2" data-type="<?php echo e($taxonomy->get('type')); ?>" data-post_type="<?php echo e($taxonomy->get('post_type')); ?>" data-taxonomy="<?php echo e($taxonomy->get('taxonomy')); ?>" ><i class="fa fa-plus-circle"></i> <?php echo e(trans('cms::app.add')); ?></button></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/form/tags.blade.php ENDPATH**/ ?>