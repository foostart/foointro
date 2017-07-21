<!-- menu NAME -->
<div class="form-group">
    <?php $product_name = $request->get('product_name') ? $request->get('product_name') : @$products->product_name ?>
    
    {!! Form::label($name, trans('admin::admin.product_name_label').':') !!}

    <!-- menu ADDRESS -->
    {!! Form::text($name, @$product_name, [
    	'class' => 'form-control', 
    	'autofocus',
    	'placeholder' => trans('admin::admin.product_name_placeholder').'']) !!}
    <!-- /END menu ADDRESS -->
</div>
<!-- /END menu NAME -->