<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="turbolinks-cache-control" content="no-cache"><meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"><title><?php echo e($title ?? ''); ?></title><link rel="icon" href="<?php echo e(asset('jw-styles/juzaweb/images/favicon.ico')); ?>" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,400i,700&display=swap"> <?php echo $__env->make('cms::components.juzaweb_langs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('juzaweb_header'); ?> <?php echo $__env->yieldContent('header'); ?></head><body class="juzaweb__menuLeft--dark juzaweb__topbar--fixed juzaweb__menuLeft--unfixed"><div class="juzaweb__layout"> <?php
        if (!isset($action)) {
            $currentUrl = url()->current();
            if (isset($model)) {
                $action = $model->id ?
                    str_replace('/edit', '', $currentUrl) :
                    str_replace('/create', '', $currentUrl);
            } else {
                $action = '';
            }
        }

        if (!isset($method)) {
            if (isset($model)) {
                $method = $model->id ? 'put' : 'post';
            } else {
                $method = 'post';
            }
        }
    ?><form action="<?php echo e($action); ?>" method="post" class="form-ajax" > <?php echo csrf_field(); ?> <?php if($method == 'put'): ?> <?php echo method_field('PUT'); ?> <?php endif; ?><div class="juzaweb__layout"><div class="juzaweb__layout__header"><div class="juzaweb__topbar"><div><a href="<?php echo e($linkIndex); ?>" class="mr-2"><i class="fa fa-chevron-left fa-3x"></i></a></div><img src="<?php echo e(asset('jw-styles/juzaweb/images/icon.png')); ?>" alt="Logo Juzaweb"><div class="juzaweb__btn-top"><?php echo $__env->yieldContent('buttons'); ?></div></div></div><div class="juzaweb__layout__content"><div class="juzaweb__utils__content pt-3"><div id="jquery-message"></div> <?php echo $__env->yieldContent('content'); ?></div></div><div class="juzaweb__layout__footer"><div class="juzaweb__footer"><div class="juzaweb__footer__inner"><a href="https://juzaweb.com" target="_blank" rel="noopener noreferrer" class="juzaweb__footer__logo">Juzaweb - Build website professional <span></span></a> <br /><p class="mb-0">Copyright © <?php echo e(date('Y')); ?> <?php echo e(get_config('title')); ?> - Provided by Juzaweb</p></div></div></div></div></form></div> <template id="form-images-template"><?php $__env->startComponent('cms::components.image-item', [
        'name' => '{name}',
        'path' => '{path}',
        'url' => '{url}',
    ]); ?> <?php echo $__env->renderComponent(); ?></template><form action="<?php echo e(route('logout')); ?>" method="post" style="display: none" class="form-logout"><?php echo csrf_field(); ?></form><script type="text/javascript">$.extend($.validator.messages,{required:"<?php echo e(trans('cms::app.this_field_is_required')); ?>",});$(".form-ajax").validate();$(".auth-logout").on('click',function(){$('.form-logout').submit();});</script><?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('juzaweb_footer'); ?> <?php echo $__env->yieldContent('footer'); ?></body></html><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/layouts/editor.blade.php ENDPATH**/ ?>