@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    {{ trans('admin::admin.page_location') }} {{ trans('admin::admin.page_menu_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($menus->menu_id) ? '
                        <i class="fa fa-pencil"></i>'.trans('admin::admin.form_menu_edit') : '
                        <i class="fa fa-users"></i>'.trans('admin::admin.form_add') !!}
                    </h3>
                </div>

                <!-- MESSAGE -->
                {{-- model general errors from the form --}}
                @if($errors->has('menu_name_unvalid_length') )
                    <div class="alert alert-danger">
                        {!! $errors->first('menu_name_unvalid_length') !!}
                    </div>
                @endif

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success">
                        {{$message}}
                    </div>
                @endif
                <!-- /END MESSAGE -->

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h4>{!! trans('admin::admin.form_heading') !!}</h4>
                            {!! Form::open([
                                'route'=>[
                                    'admin_menu.post', 
                                    'id' => @$menus->menu_id], 
                                'files'=>true, 
                                'method' => 'post'])  !!}

                            <!-- MAIL NAME TEXT-->
                            @include('admin::menus.elements.text', ['name' => 'menu_name'])
                            <!-- /END MAIL NAME TEXT -->
                            <!-- MAIL NAME TEXT-->
                            @include('admin::menus.elements.select', ['name' => 'list_menu'])
                            <!-- /END MAIL NAME TEXT -->
                            {!! Form::hidden('id',@$menus->menu_id) !!}

                            <!-- CANCEL BUTTON -->
                            <a href="{!! URL::route('admin_menu',['id' => @$mail->id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5">
                                {!! trans('admin::admin.form_button_cancel') !!}
                            </a>
                            <!-- /END CANCEL BUTTON -->

                            <!-- SAVE BUTTON -->
                            {!! Form::submit(trans('admin::admin.form_button_save'), array("class"=>"btn btn-info pull-right ")) !!}
                            <!-- /END SAVE BUTTON -->

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
@stop

@section('footer_scripts')
    {!! HTML::script('source/js/mail.js') !!}
@stop