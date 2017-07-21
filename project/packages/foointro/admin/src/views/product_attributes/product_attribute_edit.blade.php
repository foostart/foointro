@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    {{ trans('admin::admin.page_location') }} {{ trans('admin::admin.page_product_attribute_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
    <?php //var_dump(json_decode($product_attributes->product_attribute_info)); ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title bariol-thin">
                    {!! !empty($product_attributes->product_attribute_id) ? '
                    <i class="fa fa-pencil"></i>'.trans('admin::admin.form_product_attribute_edit') : '
                    <i class="fa fa-users"></i>'.trans('admin::admin.form_product_attribute_add') !!}
                </h3>
            </div>

            <!-- MESSAGE -->
            {{-- model general errors from the form --}}
            @if($errors->has('product_attribute_name_unvalid_length') )
                <div class="alert alert-danger">
                    {!! $errors->first('product_attribute_name_unvalid_length') !!}
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
                                'admin_product.attribute.post', 
                                'id' => @$product_attributes->product_attribute_id], 
                            'files'=>true, 
                            'method' => 'post'])  !!}
                        <!-- MAIL NAME TEXT-->
                        @include('admin::product_attributes.elements.select', ['name' => 'list_product_attribute'])
                        <!-- /END MAIL NAME TEXT -->
                        <!-- NAME TEXT-->
                        @include('admin::product_attributes.elements.text', ['name' => 'product_attribute_name'])
                        <!-- /END NAME TEXT-->
                        <!-- ATTRIBUTES TEXT-->
                        @include('admin::product_attributes.elements.text_add', ['name' => 'product_attribute_info'])
                        <!-- /END ATTRIBUTES TEXT-->
                        
                        {!! Form::hidden('id',@$product_attributes->product_attribute_id) !!}

                        <!-- CANCEL BUTTON -->
                        <a href="{!! URL::route('admin_product.attribute.list',['id' => @$mail->id, '_token' => csrf_token()]) !!}"
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
    {!! HTML::script('atd/admin/js/operation_text.js') !!}
    <script>
        function removeText(input){
            document.getElementById('text').removeChild( input.parentNode );
        }
    </script>
@stop