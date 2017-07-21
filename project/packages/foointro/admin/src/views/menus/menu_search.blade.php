
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i>{{ trans('admin::admin.page_search') }}</h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_menu','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('menu_name', trans('admin::admin.menu_search_label')) !!}
            {!! Form::text('menu_name', @$params['menu_name'], ['class' => 'form-control', 'placeholder' => trans('admin::admin.menu_search_placeholder')]) !!}
        </div>
        <!--/END TITLE-->

        <!--SEARCH BUTTON-->
        {!! Form::submit(trans('admin::admin.form_button_search').'', ["class" => "btn btn-info pull-right"]) !!}
        <!--/END SEARCH BUTTON-->
        
        {!! Form::close() !!}
    </div>
</div>


