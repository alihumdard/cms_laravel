<?php switch($row->status):
    case ('publish'): ?> <span class="text-success"><?php echo e(trans('cms::app.publish')); ?></span> <?php break; ?> <?php case ('approved'): ?> <span class="text-success"><?php echo e(trans('cms::app.approved')); ?></span> <?php break; ?> <?php case ('private'): ?> <span class="text-warning"><?php echo e(trans('cms::app.private')); ?></span> <?php break; ?> <?php case ('pending'): ?> <span class="text-warning"><?php echo e(trans('cms::app.pending')); ?></span> <?php break; ?> <?php case ('draft'): ?> <span class="text-secondary"><?php echo e(trans('cms::app.draft')); ?></span> <?php break; ?> <?php case ('trash'): ?> <span class="text-danger"><?php echo e(trans('cms::app.trash')); ?></span> <?php break; ?> <?php case ('deny'): ?> <span class="text-danger"><?php echo e(trans('cms::app.deny')); ?></span> <?php break; ?> <?php default: ?> <span class="text-secondary"><?php echo e(trans('cms::app.draft')); ?></span> <?php break; ?> <?php endswitch; ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/datatable/status.blade.php ENDPATH**/ ?>