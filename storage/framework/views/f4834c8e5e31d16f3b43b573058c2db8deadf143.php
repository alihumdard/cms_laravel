<?php $__env->startSection('header'); ?><link rel="stylesheet" href="<?php echo e(asset('jw-styles/juzaweb/css/code-editor.min.css')); ?>" /><script>const currentTheme="<?php echo e($theme); ?>";const themeEditUrl="<?php echo e(route('admin.theme.editor', ['__THEME__'])); ?>";const loadFileUrl="<?php echo e(route('admin.theme.editor.content', [$theme])); ?>";const saveUrl="<?php echo e(route('admin.theme.editor.save', [$theme])); ?>";const monacoFolder="<?php echo e(asset('jw-styles/juzaweb/monaco-editor/min/vs')); ?>";let file="<?php echo e($file); ?>";</script><script src="<?php echo e(asset('jw-styles/juzaweb/js/theme-editor.min.js')); ?>"></script><?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?><div class="row"><div class="col-md-9"><div id="editor"></div></div><div class="col-md-3"><button type="button" class="btn btn-success" id="save-change"><i class="fa fa-save"></i> <?php echo e(trans('cms::app.save_change')); ?> </button> <select id="change-theme" class="form-control mt-2"> <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($name); ?>" <?php if($name == $theme): ?> selected <?php endif; ?>><?php echo e($info->get('title')); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select><div class="treeview-animated mt-2 w-20 border"><h6 class="pt-3 pl-3"><?php echo e(trans('cms::app.folders')); ?></h6><hr><ul class="treeview-animated-list mb-3"><?php $__currentLoopData = $directories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__env->startComponent('cms::backend.appearance.editor.components.tree_item', [
                            'item' => $directory,
                            'theme' => $theme
                        ]); ?> <?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div></div></div> <?php $__env->stopSection(); ?> <?php echo $__env->make('cms::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/appearance/editor/index.blade.php ENDPATH**/ ?>