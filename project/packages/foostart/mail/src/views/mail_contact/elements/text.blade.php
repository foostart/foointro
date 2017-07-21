<div class="form-group">
	<?php $mail_contact_name = $request->get('mail_titlename') ? $request->get('mail_contact_name') : @$mail_contact->mail_contact_name ?>

	<?php $mail_contact_subject = $request->get('mail_titlename') ? $request->get('mail_contact_subject') : @$mail_contact->mail_contact_subject ?>

    <!-- MAIL ADDRESS -->
    {!! Form::label(trans('mail::mail_admin.mail_name').':') !!}
    {!! Form::text('address', $mail_contact_name, [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_name').'', 
        'autofocus']) !!}
    <!-- /END MAIL ADDRESS -->

    <!-- SUBJECT -->
    {!! Form::label(trans('mail::mail_admin.mail_subject').':') !!}
    {!! Form::text('subject', $mail_contact_subject, [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_subject').'']) !!}
    <!-- /END SUBJECT -->

    <!-- CONTENT -->
    {!! Form::label(trans('mail::mail_admin.mail_content').':') !!}
    <br>
    {!! Form::textarea('content', null, 
        array(
            'rows' => '4', 
            'class' => 'form-control', 
            'placeholder' => trans('mail::mail_admin.mail_content'))
        ) !!}
    <!-- /END CONTENT -->
</div>