<!-- menu NAME -->
<div class="form-group">
    <?php $menu_name = $request->get('menu_titlename') ? $request->get('menu_name') : @$menus->menu_name ?>
    
    {!! Form::label($name, trans('admin::admin.menu_name_label').':') !!}

    <!-- menu ADDRESS -->
    {!! Form::text($name, $menu_name, [
    	'class' => 'form-control', 
    	'autofocus',
    	'placeholder' => trans('admin::admin.menu_name_placeholder').'']) !!}
    <!-- /END menu ADDRESS -->
</div>
<!-- /END menu NAME -->