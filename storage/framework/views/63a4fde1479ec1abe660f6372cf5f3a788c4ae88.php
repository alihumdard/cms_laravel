<div class="card <?php echo e($class ?? ''); ?>"> <?php if($label ?? false): ?><div class="card-header"><div class="d-flex flex-column justify-content-center"><h5 class="mb-0"><?php echo e($label); ?></h5></div></div> <?php endif; ?><div class="card-body"><?php echo e($slot); ?></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/card.blade.php ENDPATH**/ ?>