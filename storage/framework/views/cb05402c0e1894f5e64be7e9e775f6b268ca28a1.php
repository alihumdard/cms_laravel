<?php
    $blocks = \Juzaweb\CMS\Facades\HookAction::getPageBlocks();
    $templateBlocks = $templateData['blocks'] ?? [];
    $currentTheme = jw_current_theme();
    $themePath = \Juzaweb\CMS\Facades\ThemeLoader::getThemePath($currentTheme);
    $key = \Illuminate\Support\Str::random(15);
?> <?php $__currentLoopData = $templateBlocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contentKey => $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
        $items = $model->getMeta('block_content', [])[$contentKey] ?? [];
    ?> <?php $__env->startComponent('cms::components.card', [
        'label' => $block['label']
    ]); ?> <?php $__env->startComponent('cms::backend.page-block.components.content_form', compact(
            'key',
            'block',
            'blocks',
            'contentKey',
            'items'
        )); ?> <?php echo $__env->renderComponent(); ?> <?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bkey => $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php
        $data = $block->get('view')->getData();
    ?> <?php if(empty($data)): ?> <?php continue; ?> <?php endif; ?> <template id="block-<?php echo e($bkey); ?>-template"><?php $__env->startComponent('cms::backend.page-block.components.page_block_item', [
            'data' => $data,
            'key' => '{marker}',
            'block' => $block,
            'contentKey' => '{content_key}',
        ]); ?> <?php echo $__env->renderComponent(); ?></template> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/page-block/block.blade.php ENDPATH**/ ?>