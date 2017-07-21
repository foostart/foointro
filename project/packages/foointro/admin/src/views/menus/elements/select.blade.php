<div class="form-group">
    <?php 
        if(!isset($menus->menu_parent)){
            $current_parent = 0;
        } else {
            $current_parent = $menus->menu_parent;
        }
    ?>
    {!! Form::label($name, trans('admin::admin.select_list_menu').':') !!}
    {!! Form::select($name, $list_menu, $current_parent, ['class' => 'form-control']); !!}
</div>