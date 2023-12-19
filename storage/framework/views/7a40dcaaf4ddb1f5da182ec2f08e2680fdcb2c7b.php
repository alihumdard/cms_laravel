<div class="row"> <?php if($actions): ?><div class="col-md-2"><form method="post" class="form-inline"> <?php echo csrf_field(); ?><div class="dropdown d-inline-block mb-2 mr-2"><button type="button" class="btn btn-primary dropdown-toggle bulk-actions-button" data-toggle="dropdown" aria-expanded="false"><?php echo e(trans('cms::app.bulk_actions')); ?></button><div class="dropdown-menu bulk-actions-actions" role="menu" x-placement="bottom-start"> <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a class="dropdown-item select-action action-<?php echo e($key); ?> <?php if($key == 'delete'): ?> text-danger <?php endif; ?>" href="javascript:void(0)" data-action="<?php echo e($key); ?>"><?php echo e(is_array($action) ? $action['label'] : $action); ?></a> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></form></div> <?php endif; ?> <?php
    $hasDetailFormater = collect($columns)->whereNotNull('detailFormater')->isNotEmpty();
    ?> <?php if($searchable): ?><div class="col-md-10"><form method="get" class="form-inline" id="form-search"> <?php $__currentLoopData = $searchFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($searchFieldTypes[$field['type']]['view']
                        ->with([
                            'name' => $name,
                            'field' => $field
                        ])); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> <?php echo e(trans('cms::app.search')); ?> </button></form></div> <?php endif; ?></div><div class="table-responsive"><table class="table jw-table" id="<?php echo e($uniqueId); ?>" <?php if($hasDetailFormater): ?> data-detail-view="true" data-detail-formatter="detailFormater" <?php endif; ?> ><thead><tr><th data-width="3%" data-checkbox="true"></th> <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><th data-width="<?php echo e($column['width'] ?? 'auto'); ?>" data-align="<?php echo e($column['align'] ?? 'left'); ?>" data-field="<?php echo e($key); ?>" data-sortable="<?php echo e($column['sortable'] ?? true); ?>" <?php if(in_array($key, $escapes)): ?> data-escape="true" <?php endif; ?> ><?php echo e($column['label'] ?? strtoupper($key)); ?></th> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></tr></thead></table></div> <?php
    if (!isset($dataUrl)) {
        $data = [
            'table' => $table,
            'data' => json_encode($params),
            'currentUrl' => url()->current()
        ];

        $dataUrl = route('admin.datatable.get-data') .'?'. http_build_query($data);
    }

    if (!isset($actionUrl)) {
        $data = [
            'table' => $table,
            'data' => json_encode($params),
            'currentUrl' => url()->current()
        ];

        $actionUrl = route('admin.datatable.bulk-actions') .'?'. http_build_query($data);
    }
?><script type="text/javascript"><?php if(!empty($hasDetailFormater)): ?>function detailFormater(index,row)
{return row.detailFormater;}<?php endif; ?>const table=new JuzawebTable({table:"#<?php echo e($uniqueId); ?>",page_size:parseInt("<?php echo e($perPage); ?>"),sort_name:"<?php echo e($sortName); ?>",sort_order:"<?php echo e($sortOder); ?>",url:"<?php echo $dataUrl; ?>",action_url:"<?php echo $actionUrl; ?>"});</script><?php /**PATH E:\Laragon\cms\modules\Backend\Providers/../resources/views/components/datatable.blade.php ENDPATH**/ ?>