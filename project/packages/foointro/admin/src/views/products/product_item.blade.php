<!--ADD product-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_product.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('admin::admin.form_button_add')}}
        </a>
    </div>
</div>
<!--/END ADD product-->

@if( ! $products->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>
                {{ trans('admin::admin.order') }}
            </td>

            <!-- product ID -->
            <th style='width:10%'>
                {{ trans('admin::admin.product_id') }}
            </th>
            <!-- /END product ID -->

            <!-- product NAME -->
            <th style='width:50%'>
                {{ trans('admin::admin.product_name') }}
            </th>
            <!-- /END product NAME -->

            <!-- product OPERATION -->
            <th style='width:20%'>
                {{ trans('admin::admin.operations') }}
            </th>
            <!-- /END product OPERATION -->
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $products->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($products as $product)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>

            <!-- product ID -->
            <td>
                {!! $product->product_id !!}
            </td>
            <!-- /END product ID -->

            <!-- product NAME -->
            <td>
                {!! $product->product_name !!}
            </td>
            <!-- /END product NAME -->

            <td>
                <!-- EDIT BUTTON -->
                <a href="{!! URL::route('admin_product.edit', ['id' => $product->product_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <!-- /END EDIT BUTTON -->

                <!-- DELETE BUTTON -->
                <a href="{!! URL::route('admin_product.delete',['id' =>  $product->product_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
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
		{{ trans('admin::admin.message_find_failed') }}
	</h5>
    <!-- /END MESSAGE FAIL -->

 </span>
@endif
<div class="paginator">
    {!! $products->appends($request->except(['page']) )->render() !!}
</div>