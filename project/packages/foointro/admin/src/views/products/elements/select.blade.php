<div class="form-group">
    <?php 
        if(!isset($products->product_parent)){
            $current_parent = 0;
        } else {
            $current_parent = $products->product_parent;
        }

        // $root_products->each(function($item, $key){
        //     var_dump($item, $key);
        // });
        // var_dump($current_parent);
        // die();
        // var_dump($root_products->toArray());
  //       echo Form::select('animal', array(
		//     'Cats' => array('leopard' => 'Leopard'),
		//     'Dogs' => array('spaniel' => 'Spaniel'),
		// ));
    ?>
    {!! Form::label($name, trans('admin::admin.select_list_product').':') !!}
    {!! Form::select($name, $root_products, $current_parent, ['class' => 'form-control']); !!}
</div>