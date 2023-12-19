<ul class="juzaweb__menuLeft__navigation"> <?php
        use Juzaweb\CMS\Facades\HookAction;
        use Juzaweb\CMS\Support\MenuCollection;

        global $jw_user;
        $adminPrefix = config('juzaweb.admin_prefix');
        $adminUrl = url($adminPrefix);
        $currentUrl = url()->current();
        $segment3 = request()->segment(3);
        $segment2 = request()->segment(2);
        $items = MenuCollection::make(apply_filters('get_admin_menu', HookAction::getAdminMenu()));
    ?> <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($item->get('key') != 'dashboard' && !$jw_user->canAny($item->get('permissions', ['admin']))): ?> <?php continue; ?> <?php endif; ?> <?php if($item->hasChildren()): ?> <?php
                $strChild = '';
                $hasActive = false;
                foreach($item->getChildrens() as $child) {
                    if(!$jw_user->canAny($child->get('permissions', ['admin']))) {
                        continue;
                    }

                    if (empty($segment2)) {
                        $active = empty($child->getUrl());
                    } else {
                        $active = request()->is($adminPrefix .'/'. $child->get('url') . '*');
                    }

                    if ($active) {
                        $hasActive = true;
                    }

                    $strChild .= view('cms::backend.items.menu_left_item', [
                        'adminUrl' => $adminUrl,
                        'item' => $child,
                        'active' => $active,
                        'icon' => false
                    ])->render();
                }
            ?><li class="juzaweb__menuLeft__item juzaweb__menuLeft__submenu juzaweb__menuLeft__item-<?php echo e($item->get('slug')); ?> <?php if($hasActive): ?> juzaweb__menuLeft__submenu--toggled <?php endif; ?>"><span class="juzaweb__menuLeft__item__link"><i class="juzaweb__menuLeft__item__icon <?php echo e($item->get('icon')); ?>"></i> <span class="juzaweb__menuLeft__item__title"><?php echo e($item->get('title')); ?></span></span><ul class="juzaweb__menuLeft__navigation" <?php if($hasActive): ?> style="display: block;" <?php endif; ?>><?php echo $strChild; ?></ul></li> <?php else: ?> <?php $__env->startComponent('cms::backend.items.menu_left_item', [
                'adminUrl' => $adminUrl,
                'item' => $item,
                'active' => $item->get('url') == 'dashboard' ? request()->is($adminPrefix) : request()->is($adminPrefix .'/'. $item->get('url') . '*'),
            ]); ?> <?php echo $__env->renderComponent(); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/backend/menu_left.blade.php ENDPATH**/ ?>