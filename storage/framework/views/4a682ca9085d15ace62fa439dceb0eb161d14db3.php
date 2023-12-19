<?php
    $taxonomies = \Juzaweb\CMS\Facades\HookAction::getTaxonomies($postType);
?> <?php $__currentLoopData = $taxonomies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__env->startComponent('cms::components.form_taxonomies', [
        'taxonomy' => $taxonomy,
        'model' => $model
    ]); ?><?php echo $__env->renderComponent(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/taxonomies.blade.php ENDPATH**/ ?>