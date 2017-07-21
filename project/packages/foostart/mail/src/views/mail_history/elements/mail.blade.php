<!-- MAIL -->
<div class="form-group">
    <?php $mail_name = $request->get('mail_titlename') ? $request->get('mail_name') : @$mail->mail_name ?>

    <!-- MAIL TO -->
    {!! Form::label('Mail to: ') !!}
    {!! Form::label($name, $mail_name, trans('mail::mail_admin.name').':') !!}
    <!-- /END MAIL TO -->
    <br>
    <!-- SUBJECT -->
    {!! Form::label(trans('mail::mail_admin.mail_subject').':') !!}
    {!! Form::text('mail_subject', null, [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_subject').'', 
        'autofocus']) !!}
    <!-- /END SUBJECT -->

    <!-- CONTENT -->
    {!! Form::label(trans('mail::mail_admin.mail_content').':') !!}
    {!! Form::textarea('mail_content', null, 
        array(
            'rows' => '4', 
            'cols' => '75', 
            'width' => '100%', 
            'placeholder' => trans('mail::mail_admin.mail_content'))
        ) !!}
    <!-- /END CONTENT -->

    <!-- ATTACH FILE -->
    {!! Form::label(trans('mail::mail_admin.mail_attach_file').':') !!}
    {!! Form::file('fileToUpload') !!}
    <!-- /END ATTACH FILE -->
</div>
<!-- /END MAIL -->