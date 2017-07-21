<div class="form-group">
    <?php 
        if(!isset($products->product_child)){
            $current_parent = 0;
        } else {
            $current_parent = $products->product_child;
        }

        // $root_products->each(function($item, $key){
        //     var_dump($item, $key);
        // });
        // var_dump($current_parent);
        // die();
        // var_dump($root_products->toArray());
        // echo Form::select('animal', array(
		//     'Cats' => array('leopard' => 'Leopard'),
		//     'Dogs' => array('spaniel' => 'Spaniel'),
		// ));
    ?>
    
    @if($current_parent == 0)
        <label for="product_child"> {{ trans('admin::admin.select_list_child_product') }}:</label>
        <div class="form-group">
            <select id="product_child" class="form-control" name="product_child">
                <option value="0">Undefined</option>
            </select>
        </div>
    @else
        {!! Form::label($name, trans('admin::admin.select_list_child_product').':') !!}
        {!! Form::select($name, $child_products, $current_parent, ['class' => 'form-control']); !!}
    @endif
</div>