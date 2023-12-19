<div class="form-group form-taxonomy"><label class="col-form-label w-100"><?php echo e($taxonomy->get('label')); ?> <span> <a href="javascript:void(0)" class="float-right add-new"><i class="fa fa-plus"></i> <?php echo e(trans('cms::app.add_new')); ?> </a></span></label> <?php
        $items = \Juzaweb\Backend\Models\Taxonomy::with(['children'])
            ->whereNull('parent_id')
            ->where('taxonomy', '=', $taxonomy->get('taxonomy'))
            ->where('post_type', '=', $taxonomy->get('post_type'))
            ->get();
        $value = $model->taxonomies
            ->where('taxonomy', '=', $taxonomy->get('taxonomy'))
            ->pluck('id')
            ->toArray();
    ?><div class="show-taxonomies taxonomy-<?php echo e($taxonomy->get('taxonomy')); ?>"><ul class="mt-2 p-0"><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__env->startComponent('cms::components.form.taxonomy_item', [
                    'taxonomy' => $taxonomy,
                    'item' => $item,
                    'value' => $value
                ]); ?> <?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div><div class="form-add mt-2 form-add-taxonomy box-hidden"><div class="form-group"><label class="col-form-label"><?php echo e(trans('cms::app.name')); ?> <abbr>*</abbr></label> <input type="text" class="form-control taxonomy-name" autocomplete="off"></div> <?php if(in_array('hierarchical', $taxonomy->get('supports', []))): ?><div class="form-group mb-1"><label class="col-form-label"><?php echo e(trans('cms::app.parent')); ?></label> <select type="text" class="form-control taxonomy-parent load-taxonomies" autocomplete="off" data-post-type="<?php echo e($taxonomy->get('post_type')); ?>" data-taxonomy="<?php echo e($taxonomy->get('taxonomy')); ?>"></select></div> <?php endif; ?> <button type="button" class="btn btn-primary mt-2" data-type="<?php echo e($taxonomy->get('type')); ?>" data-post_type="<?php echo e($taxonomy->get('post_type')); ?>" data-taxonomy="<?php echo e($taxonomy->get('taxonomy')); ?>" ><i class="fa fa-plus-circle"></i> <?php echo e(trans('cms::app.add')); ?> </button></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/form/categories.blade.php ENDPATH**/ ?>