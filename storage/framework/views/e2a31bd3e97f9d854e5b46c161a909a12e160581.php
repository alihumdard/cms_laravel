<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"><title><?php echo e($title ?? ''); ?></title><link rel="icon" href="<?php echo e(asset('jw-styles/juzaweb/images/favicon.ico')); ?>" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,400i,700&display=swap"/> <?php echo $__env->make('cms::components.juzaweb_langs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('juzaweb_header'); ?> <?php echo $__env->yieldContent('header'); ?></head><body class="juzaweb__menuLeft--dark juzaweb__menuLeft--unfixed juzaweb__menuLeft--shadow"><div id="admin-overlay"><div class="cv-spinner"><span class="spinner"></span></div></div><div class="juzaweb__layout juzaweb__layout--hasSider"><div class="juzaweb__menuLeft"><div class="juzaweb__menuLeft__mobileTrigger"><span></span></div><div class="juzaweb__menuLeft__outer"><div class="juzaweb__menuLeft__logo__container"><a href="/<?php echo e(config('juzaweb.admin_prefix')); ?>"><div class="juzaweb__menuLeft__logo"><img src="<?php echo e(asset('jw-styles/juzaweb/images/logo.svg')); ?>" class="mr-1" alt="Juzaweb"><div class="juzaweb__menuLeft__logo__name">JuzaWeb</div><div class="juzaweb__menuLeft__logo__descr">Cms</div></div></a></div><div class="juzaweb__menuLeft__scroll jw__customScroll"><?php echo $__env->make('cms::backend.menu_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div></div></div><div class="juzaweb__menuLeft__backdrop"></div><div class="juzaweb__layout"><div class="juzaweb__layout__header"><?php echo $__env->make('cms::backend.menu_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div><div class="juzaweb__layout__content"> <?php if(!request()->is(config('juzaweb.admin_prefix'))): ?> <?php echo e(jw_breadcrumb(
                        'admin',
                         [
                            [
                                'title' => $title
                            ]
                        ]
                    )); ?> <?php else: ?><div class="mb-3"></div> <?php endif; ?><h4 class="font-weight-bold ml-3 text-capitalize"><?php echo e($title); ?></h4><div class="juzaweb__utils__content"> <?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('backend_message'); ?> <?php
                    $messages = get_backend_message();
                ?> <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="alert alert-<?php echo e($message['status'] == 'error' ? 'danger' : $message['status']); ?> jw-message"><button type="button" class="close close-message" data-dismiss="alert" aria-label="Close" data-id="<?php echo e($message['id']); ?>"><span aria-hidden="true">×</span></button> <?php echo e_html($message['message']); ?></div> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(session()->has('message')): ?><div class="alert alert-<?php echo e(session()->get('status') == 'error' ? 'danger' : 'success'); ?> jw-message"><?php echo e(session()->get('message')); ?></div> <?php endif; ?><div id="jquery-message"></div> <?php echo $__env->yieldContent('content'); ?></div></div><div class="juzaweb__layout__footer"><div class="juzaweb__footer"><div class="juzaweb__footer__inner"><a href="https://juzaweb.com" target="_blank" rel="noopener noreferrer" class="juzaweb__footer__logo">Juzaweb - Build website professional <span></span></a> <br /><p class="mb-0">Copyright © 2020 <?php echo e(get_config('title')); ?> - Provided by Juzaweb</p></div></div></div></div></div> <template id="form-images-template"><?php $__env->startComponent('cms::components.image-item', [
        'name' => '{name}',
        'path' => '{path}',
        'url' => '{url}',
    ]); ?> <?php echo $__env->renderComponent(); ?></template><div id="show-modal"></div><form action="<?php echo e(route('logout')); ?>" method="post" style="display: none" class="form-logout"><?php echo csrf_field(); ?></form><script type="text/javascript">$.extend($.validator.messages,{required:"<?php echo e(trans('cms::app.this_field_is_required')); ?>",});$(".form-ajax").validate();$(".auth-logout").on('click',function(){$('.form-logout').submit();});</script><?php app(\Juzaweb\CMS\Contracts\EventyContract::class)->action('juzaweb_footer'); ?> <?php echo $__env->yieldContent('footer'); ?></body></html><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/layouts/backend.blade.php ENDPATH**/ ?>