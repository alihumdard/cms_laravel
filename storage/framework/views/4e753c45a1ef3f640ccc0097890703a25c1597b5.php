<div class="form-group"><label class="col-form-label" for="<?php echo e($id ?? $name); ?>"><?php echo e($label ?? $name); ?> <?php if($required ?? false): ?> <abbr>*</abbr> <?php endif; ?> </label> <select name="<?php echo e(($multiple ?? false) ? "{$name}[]" : $name); ?>" id="<?php echo e($id ?? $name); ?>" class="form-control <?php echo e($class ?? 'select2-default'); ?>" <?php echo e(($multiple ?? false) ? 'multiple' : ''); ?> <?php echo e(($disabled ?? false) ? 'disabled' : ''); ?> <?php echo e(($readonly ?? false) ? 'readonly' : ''); ?> <?php if($required ?? false): ?> required <?php endif; ?> <?php $__currentLoopData = $data ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> data-<?php echo e($key); ?>="<?php echo e($val); ?>" <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> > <?php
            $value = $value ?? [];
            $value = !is_array($value) ? [$value] : $value;
        ?> <?php $__currentLoopData = $options ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
                if(is_array($name)) :
                    $label = $name['label'];
                    $opdata = $name['data'];
                else :
                    $label = $name;
                    $opdata = [];
                endif;
            ?><option value="<?php echo e($key); ?>" <?php if(in_array($key, $value)): ?> selected <?php endif; ?> <?php $__currentLoopData = $opdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opkey => $opval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> data-<?php echo e($opkey); ?>="<?php echo e($opval); ?>" <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> ><?php echo e($label); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/form_select.blade.php ENDPATH**/ ?>