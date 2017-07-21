@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
	Admin area: {{ trans('mail::mail_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- MAIL -->
        <h4>{!! trans('mail::mail_admin.form_heading') !!}</h4>

        <!-- MESSAGE -->
        {{-- successful message --}}
        <?php $message = Session::get('message'); ?>
        @if( isset($message) )
        <div class="alert alert-success">{{$message}}</div>
        @endif
        <!-- /END MESSAGE -->
        
        {!! Form::open(['route'=>['mail.contact_save', 'id' => @$mail_contact->mail_contact_id],  'files'=>true, 'method' => 'post'])  !!}
        
        <!-- MAIL NAME TEXT-->
        @include('mail::mail_contact.elements.text', ['name' => 'mail_contact_name'])
        <!-- /END MAIL NAME TEXT -->
        
        {!! Form::hidden('id',@$mail->mail_id) !!}

        <!-- SEND BUTTON -->
        {!! Form::submit(trans('mail::mail_admin.send'), array("class"=>"btn btn-info pull-right ")) !!}
        <!-- /END SEND BUTTON -->

        {!! Form::close() !!}
        <!-- /END MAIL -->
    </div>
</div>
@stop