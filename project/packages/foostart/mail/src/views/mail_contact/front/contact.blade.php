<!DOCTYPE html>
<html>
	<head>
		<title> {{ trans('mail::mail_admin.contact') }} </title>
		<link href="{{ asset('source/css/contact.css') }}" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<header>{{ trans('mail::mail_admin.contact') }}</header>
		<?php $mail_contact_name = $request->get('mail_titlename') ? $request->get('mail_contact_name') : @$mail_contact->mail_contact_name ?>
		
		{!! Form::open([
			'route'=>['mail.contact_save'],
			'files'=>true, 
			'method' => 'post',
			'id' => 'form',
			'class' => 'topBefore'])  !!}

			<!-- ADDRESS -->
			{!! Form::text('address', null, [
        		'placeholder' => trans('mail::mail_admin.mail_name').'', 
        		'autofocus']) !!}
    		<!-- /END ADDRESS -->

    		<!-- SUBJECT -->
			{!! Form::text('subject', null, [
        		'placeholder' => trans('mail::mail_admin.mail_subject').'']) !!}
    		<!-- /END SUBJECT -->

    		<!-- CONTENT -->
			{!! Form::textarea('content', null, 
		        array(
		            'rows' => '4', 
		            'placeholder' => trans('mail::mail_admin.mail_content'))
		        ) !!}
	        <!-- /END CONTENT -->

	        <!-- SEND BUTTON -->
        	{!! Form::submit(trans('mail::mail_admin.send'), [
        		"class"=>"btn btn-info pull-right ",
        		'id' => 'submit']) !!}
    		<!-- /END SEND BUTTON -->

        {!! Form::close() !!}
	</body>
</html>