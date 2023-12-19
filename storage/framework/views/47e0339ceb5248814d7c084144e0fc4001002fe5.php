<div class="form-group"> <?php
        $path = $value ?? null;
    ?> <label class="col-form-label"><?php echo e($label ?? $name); ?></label><div class="form-image text-center <?php if($path): ?> previewing <?php endif; ?>"><a href="javascript:void(0)" class="image-clear"><i class="fa fa-times-circle fa-2x"></i></a> <input type="hidden" name="<?php echo e($name); ?>" class="input-path" value="<?php echo e($path); ?>"><div class="dropify-preview image-hidden" <?php if($path): ?> style="display: block" <?php endif; ?>><span class="dropify-render"><?php if(!empty($path)): ?> <img src="<?php echo e(upload_url($path)); ?>" alt=""> <?php endif; ?> </span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="dropify-filename-inner"></span></p></div></div></div><div class="icon-choose"><i class="fa fa-cloud-upload fa-5x"></i><p><?php echo e(trans('cms::app.click_here_to_select_file')); ?></p></div></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/form_image.blade.php ENDPATH**/ ?>