
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i>{{ trans('admin::admin.page_search') }}</h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_product','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('product_name', trans('admin::admin.product_search_label')) !!}
            {!! Form::text('product_name', @$params['product_name'], ['class' => 'form-control', 'placeholder' => trans('admin::admin.product_search_placeholder')]) !!}
        </div>
        <!--/END TITLE-->

        <!--SEARCH BUTTON-->
        {!! Form::submit(trans('admin::admin.form_button_search').'', ["class" => "btn btn-info pull-right"]) !!}
        <!--/END SEARCH BUTTON-->
        
        {!! Form::close() !!}
    </div>
</div>


