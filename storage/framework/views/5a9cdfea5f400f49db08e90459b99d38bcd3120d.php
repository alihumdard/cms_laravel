<div class="modal fade" id="add-folder-modal" tabindex="-1" role="dialog" aria-labelledby="add-folder-modal-label" aria-hidden="true"><div class="modal-dialog" role="document"><form action="<?php echo e(route('admin.media.add-folder')); ?>" method="post" class="form-ajax" data-success="add_folder_success"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="add-folder-modal-label"> <?php echo e(trans(('cms::app.add_folder'))); ?></h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(trans('cms::app.close')); ?>"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"> <?php $__env->startComponent('cms::components.form_input', [
                        'label' => trans('cms::app.folder_name'),
                        'name' => 'name'
                    ]); ?> <?php echo $__env->renderComponent(); ?> <input type="hidden" name="folder_id" value="<?php echo e($folderId); ?>"><input type="hidden" name="type" value="<?php echo e($type); ?>"></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo e(trans('cms::app.close')); ?></button> <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo e(trans('cms::app.add_folder')); ?></button></div></div></form></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/media/components/add_modal.blade.php ENDPATH**/ ?>