<!-- menu NAME -->
<div class="form-group">
    <?php 
    	$brief_description = $request->get('product_brief_description_titlename') ? $request->get('product_brief_description') : @$products->product_brief_description;
    	$description = $request->get('product_description_titlename') ? $request->get('product_description') : @$products->product_description;
    	// var_dump($product_brief_description);
    	// var_dump($product_description);
	?>
    <!-- menu ADDRESS -->
    {!! Form::label($product_brief_description, trans('admin::admin.product_brief_description_label').':') !!}
    {!! Form::textarea($product_brief_description, $brief_description, [
    	'class' => 'form-control', 
    	'rows' => 3,
    	'placeholder' => trans('admin::admin.product_brief_description_placeholder').'']) !!}
    <!-- /END menu ADDRESS -->
    <!-- menu ADDRESS -->
    {!! Form::label($product_description, trans('admin::admin.product_description_label').':') !!}
    {!! Form::textarea($product_description, $description, [
    	'class' => 'form-control', 
    	'rows' => 6,
    	'placeholder' => trans('admin::admin.product_description_placeholder').'']) !!}
    <!-- /END menu ADDRESS -->
</div>
<!-- /END menu NAME -->