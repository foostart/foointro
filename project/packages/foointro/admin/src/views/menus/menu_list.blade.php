@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('admin::admin.page_menu_list') }}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin"><i class="fa fa-group"></i> {!! $request->all() ? trans('admin::admin.page_search') : trans('admin::admin.page_menu_list') !!}</h3>
                </div>
                
                <!--MESSAGE-->
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success flash-message">
                        {!! $message !!}
                    </div>
                @endif
                <!--MESSAGE-->

                <!--ERRORS-->
                @if($errors && ! $errors->isEmpty() )
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger flash-message">
                            {!! $error !!}
                        </div>
                    @endforeach
                @endif 
                <!--ERRORS-->

                <!-- ITEM -->
                <div class="panel-body">
                    @include('admin::menus.elements.treeview')
                </div>
                <!-- /END ITEM -->

            </div>
        </div>

        <!-- SEARCH -->
        <div class="col-md-3">
            @include('admin::menus.menu_search')
        </div>
        <!-- /END SEARCH -->

    </div>
</div>
@stop

@section('footer_scripts')
    <script>
        $(".delete").click(function () {
            return confirm("Are you sure to delete this item?");
        });
    </script>
    {!! HTML::script('atd/admin/js/message.js') !!}
@stop