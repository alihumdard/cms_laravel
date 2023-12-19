<?php
$langs = array_merge(trans('cms::app', [], 'en'), trans('cms::app'));
$plugins = \Juzaweb\CMS\Facades\Plugin::all(true)->map(
    fn($item) => Arr::only($item, ['name', 'description'])
)->values();
$themeKeys = get_config("theme_activation_codes", []);
$themes = \Juzaweb\CMS\Facades\Theme::all(true)->map(
    function ($item) use ($themeKeys) {
        $results = Arr::only($item, ['name', 'title', 'description', 'version']);
        $results['active'] = jw_current_theme() == $item['name'];
        if ($key = Arr::get($themeKeys, \Illuminate\Support\Str::snake($item['name']))) {
            $results['key'] = Arr::only($key, ['token', 'certificate']);
        }

        return $results;
    }
)->values();
?><script type="text/javascript">const juzaweb={adminPrefix:"<?php echo e(config('juzaweb.admin_prefix')); ?>",adminUrl:"<?php echo e(url(config('juzaweb.admin_prefix'))); ?>",lang:<?php echo json_encode($langs, 15, 512) ?>,plugins:<?php echo json_encode($plugins, 15, 512) ?>,themes:<?php echo json_encode($themes, 15, 512) ?>}</script><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/juzaweb_langs.blade.php ENDPATH**/ ?>