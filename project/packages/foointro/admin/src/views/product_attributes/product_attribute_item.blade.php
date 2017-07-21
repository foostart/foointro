<!--ADD product_attribute-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_product.attribute.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('admin::admin.form_button_add')}}
        </a>
    </div>
</div>
<!--/END ADD product_attribute-->

@if( ! $product_attributes->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>
                {{ trans('admin::admin.order') }}
            </td>

            <!-- product_attribute ID -->
            <th style='width:10%'>
                {{ trans('admin::admin.product_attribute_id') }}
            </th>
            <!-- /END product_attribute ID -->

            <!-- product_attribute NAME -->
            <th style='width:50%'>
                {{ trans('admin::admin.product_attribute_name') }}
            </th>
            <!-- /END product_attribute NAME -->

            <!-- product_attribute OPERATION -->
            <th style='width:20%'>
                {{ trans('admin::admin.operations') }}
            </th>
            <!-- /END product_attribute OPERATION -->
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $product_attributes->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($product_attributes as $product_attribute)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>

            <!-- product_attribute ID -->
            <td>
                {!! $product_attribute->product_attribute_id !!}
            </td>
            <!-- /END product_attribute ID -->

            <!-- product_attribute NAME -->
            <td>
                {!! $product_attribute->product_attribute_name !!}
            </td>
            <!-- /END product_attribute NAME -->

            <td>
                <!-- EDIT BUTTON -->
                <a href="{!! URL::route('admin_product.attribute.edit', ['id' => $product_attribute->product_attribute_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <!-- /END EDIT BUTTON -->

                <!-- DELETE BUTTON -->
                <a href="{!! URL::route('admin_product.attribute.delete',['id' =>  $product_attribute->product_attribute_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <!-- /END DELETE BUTTON -->

                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">

    <!-- MESSAGE FAIL -->
	<h5>
		{{ trans('product_attribute::product_attribute_admin.message_find_failed') }}
	</h5>
    <!-- /END MESSAGE FAIL -->

 </span>
@endif
<div class="paginator">
    {!! $product_attributes->appends($request->except(['page']) )->render() !!}
</div>