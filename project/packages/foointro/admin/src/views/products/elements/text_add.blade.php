{{-- add text --}}
<div class="form-group text" id="text">
	<?php 
		$product_attribute_info = $request->get('product_attribute_titlename') ? $request->get('product_attribute_info') : json_decode(@$product_attributes->product_attribute_info);
		// var_dump($product_attribute_info);
		// die();
	?>
	{!! Form::label($name, trans('admin::admin.list_product_attribute_label').':') !!}
	<div class="input-group" id="attr1">
        <span class="input-group-addon form-button button-add-perm"><span class="glyphicon glyphicon-plus-sign add-input"></span></span>
    {!! Form::text('attribute', '', [
    	'class' => 'form-control', 
    	'placeholder' => trans('admin::admin.attribute_name_placeholder').'']) !!}
    </div>
    <?php $count = 2; ?>
    @if(!empty($product_attribute_info))
		@foreach($product_attribute_info as $value)
			<div class="input-group" id="attr{{ $count }}">
		        <span class="input-group-addon form-button button-del-perm"><span class="glyphicon glyphicon-plus-sign add-input"></span></span>
		    {!! Form::text('attribute'.$count, $value, [
		    	'class' => 'form-control', 
		    	'placeholder' => trans('admin::admin.attribute_name_placeholder').'']) !!}
		    </div>
		    <?php $count++; ?>
		@endforeach
	@endif
	<input type="text" name="index" value="{{ $count }}" hidden="">
	<?php //var_dump($count); ?>
    <!-- <div class="input-group" id="attr1">
        <span class="input-group-addon form-button button-add-perm"><span class="glyphicon glyphicon-plus-sign add-input"></span></span>
    {!! Form::text('attribute', '', [
    	'class' => 'form-control', 
    	'placeholder' => trans('admin::admin.attribute_name_placeholder').'']) !!}
    </div> -->
</div>