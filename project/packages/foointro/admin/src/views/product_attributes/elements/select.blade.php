<div class="form-group">
    <?php 
    	// var_dump($product_attributes->product_attribute_parent);
        if(!isset($product_attributes->product_attribute_parent)){
            $current_parent = 0;
        } else {
            $current_parent = $product_attributes->product_attribute_parent;
        }
        // var_dump($list_product_attribute);
        // var_dump($current_parent);
    ?>
    {!! Form::label($name, trans('admin::admin.select_list_product_attribute').':') !!}
    {!! Form::select($name, $list_product_attribute, $current_parent, ['class' => 'form-control']); !!}
</div>