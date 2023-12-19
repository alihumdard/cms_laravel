<div class="page-block-content"> <?php
        $currentTheme = jw_current_theme();
        $themePath = \Juzaweb\CMS\Facades\ThemeLoader::getThemePath($currentTheme);
    ?><div id="page-block-builder-nestable-<?php echo e($key); ?>" class="dd jw-widget-builder"><ol class="dd-list"><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
                    $block = $blocks[$item['block']] ?? null;
                ?> <?php if(empty($block)): ?> <?php continue; ?> <?php endif; ?> <?php
                    $data = $block->get('view')->getData();
                ?> <?php if(empty($data)): ?> <?php continue; ?> <?php endif; ?> <?php $__env->startComponent('cms::backend.page-block.components.page_block_item', [
                    'data' => $data,
                    'key' => 'block-' . $index,
                    'block' => $block,
                    'contentKey' => $contentKey,
                    'value' => $item,
                ]); ?> <?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ol></div><div class="widget-button w-100 text-center"><div class="dropdown"><button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton-<?php echo e($key); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(trans('cms::app.add_block')); ?></button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton-<?php echo e($key); ?>"> <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bkey => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="javascript:void(0)" class="dropdown-item add-block-data" data-block="<?php echo e($bkey); ?>" data-key="<?php echo e($key); ?>" data-content_key="<?php echo e($contentKey); ?>" ><?php echo e($b->get('label')); ?></a> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></div></div><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/page-block/components/content_form.blade.php ENDPATH**/ ?>