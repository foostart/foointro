<!-- product_attribute NAME -->
<div class="form-group">
    <?php $product_attribute_name = $request->get('product_attribute_titlename') ? $request->get('product_attribute_name') : @$product_attributes->product_attribute_name ?>
    
    {!! Form::label($name, trans('admin::admin.product_attribute_name_label').':') !!}

    <!-- product_attribute ADDRESS -->
    {!! Form::text($name, $product_attribute_name, [
    	'class' => 'form-control', 
    	'autofocus',
    	'placeholder' => trans('admin::admin.product_name_placeholder').'']) !!}
    <!-- /END product_attribute ADDRESS -->
</div>
<!-- /END product_attribute NAME -->