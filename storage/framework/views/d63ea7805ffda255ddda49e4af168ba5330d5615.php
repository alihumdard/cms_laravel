<div class="form-group"> <?php
        $value = $value ?? [];
        $value = !is_array($value) ? [$value] : $value;

        $options = [];
        if ($value) {
            $options = \Juzaweb\Backend\Models\Taxonomy::whereIn('id', $value)
                ->get(['id', 'name'])
                ->mapWithKeys(function ($item) {
                    return [
                        $item->id => $item->name
                    ];
                })
                ->toArray();
        }
    ?> <label class="col-form-label" for="<?php echo e($id ?? $name); ?>"><?php echo e($label ?? $name); ?></label> <select name="<?php echo e(($multiple ?? false) ? "{$name}[]" : $name); ?>" id="<?php echo e($id ?? $name); ?>" class="form-control load-taxonomies" data-post-type="<?php echo e($post_type ?? ''); ?>" data-taxonomy="<?php echo e($taxonomy ?? ''); ?>" <?php echo e(($multiple ?? false) ? 'multiple' : ''); ?> > <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($key); ?>" <?php if(in_array($key, $value)): ?> selected <?php endif; ?>><?php echo e($tname); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/form_select_taxonomy.blade.php ENDPATH**/ ?>