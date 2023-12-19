<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
        $meta['name'] = Arr::get($meta, 'name', $name);
        if (Arr::has($meta, 'value')) {
            $meta['data']['value'] = Arr::get($meta, 'value');
        } else {
            if (is_array($values)) {
                $meta['data']['value'] = $values[$meta['name']] ?? null;
            } else {
                $meta['data']['value'] = $values->{$meta['name']} ?? null;
            }
        }
    ?> <?php if(in_array($meta['type'], ['row', 'col'])): ?> <?php echo e(Field::{$meta['type']}($meta, $values)); ?> <?php else: ?> <?php echo e(Field::fieldByType($meta)); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/render_fields.blade.php ENDPATH**/ ?>