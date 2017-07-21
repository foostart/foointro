<div class="form-group">
    <?php 
        $product_image = $request->get('product_image') ? $request->get('product_image') : @$products->product_image;
        // var_dump($product_image);
        $hidden_img = $request->get('uploaded_img') ? $request->get('uploaded_img') : @$products->product_image;
        // var_dump($hidden_img);
        // if(isset($uploaded_img)){
        //     var_dump($uploaded_img);
        // }
        $img_show = public_path().'/'.$product_image;
        // var_dump(public_path().'/'.$product_image);
        // echo public_path();
        // print_r(public_path());
        var_dump($img_show);
    ?>
    {!! Form::label($name, trans('admin::admin.product_image_label').':') !!}
    {!! Form::file(@$name, [
            'id' => 'img', 
            'class' => 'form-control'
        ]) !!}
    <img id="show_img" src="../{{ asset($img_show) }}" alt="{{ trans('admin::admin.image_upload') }}">
    <?php //var_dump($hidden_img); ?>
    {!! Form::text(@$img, $hidden_img, ['id' => 'hidden_img', 'hidden']) !!}
</div>