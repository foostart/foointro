@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    {{ trans('admin::admin.page_location') }} {{ trans('admin::admin.page_product_edit') }}
@stop

@section('head_css')
    {!! HTML::style('atd/admin/css/preview_img.css') !!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($menus->menu_id) ? '
                        <i class="fa fa-pencil"></i>'.trans('admin::admin.form_product_edit') : '
                        <i class="fa fa-users"></i>'.trans('admin::admin.form_product_add') !!}
                    </h3>
                </div>

                <!-- MESSAGE -->
                {{-- model general errors from the form --}}
                @if($errors->has('product_name_unvalid_length') )
                    <div class="alert alert-danger">
                        {!! $errors->first('product_name_unvalid_length') !!}
                    </div>
                @endif

                @if($errors->has('img_attach_unvalid') )
                    <div class="alert alert-danger">
                        {!! $errors->first('img_attach_unvalid') !!}
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
                                    'admin_product.post', 
                                    'id' => @$products->product_id], 
                                'files'=>true, 
                                'method' => 'post'])  !!}

                            <!-- MAIL NAME TEXT-->
                            @include('admin::products.elements.text', ['name' => 'product_name'])
                            <!-- /END MAIL NAME TEXT -->

                            <div class="col-md-6 col-xs-6">
                                <!-- MAIL NAME TEXT-->
                                @include('admin::products.elements.select', ['name' => 'product_parent'])
                                <!-- /END MAIL NAME TEXT -->
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <!-- MAIL NAME TEXT-->
                                @include('admin::products.elements.select_child', ['name' => 'product_child'])
                                <!-- /END MAIL NAME TEXT -->
                            </div>

                            <!-- MAIL NAME TEXT-->
                            @include('admin::products.elements.text_area', [
                                    'product_brief_description' => 'product_brief_description',
                                    'product_description' => 'product_description'
                                ])
                            <!-- /END MAIL NAME TEXT -->

                            <!-- ATTRIBUTES TEXT-->
                            <!-- /END ATTRIBUTES TEXT-->

                            <!-- MAIL NAME TEXT-->
                            @include('admin::products.elements.upload_image', [
                                'name' => 'product_image',
                                'img' => 'uploaded_img'
                            ])
                            <!-- /END MAIL NAME TEXT -->

                            {!! Form::hidden('id',@$products->product_id) !!}

                            <!-- CANCEL BUTTON -->
                            <a href="{!! URL::route('admin_product',['id' => @$products->product_id, '_token' => csrf_token()]) !!}"
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
    {!! HTML::script('atd/admin/js/products.js') !!}
    {!! HTML::script('atd/admin/js/preview_img.js') !!}
    {!! HTML::script('atd/admin/js/message.js') !!}
@stop