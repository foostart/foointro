<!-- MAIL -->
<div class="form-group">
    <?php $mail_name = $request->get('mail_titlename') ? $request->get('mail_name') : @$mail->mail_name ?>

    <!-- MAIL ADDRESS -->
    {!! Form::label(trans('mail::mail_admin.mail_name').':') !!}
    {!! Form::label(trans('mail::mail_admin.mail_role')) !!}
    {!! Form::text('mail_name', $request->get('mail_name'), [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_name').'', 
        'autofocus']) !!}
    {!! Form::hidden('compose', 'compose') !!}
    <!-- /END MAIL ADDRESS -->

    <!-- SUBJECT -->
    {!! Form::label(trans('mail::mail_admin.mail_subject').':') !!}
    {!! Form::text('mail_subject', $request->get('mail_subject'), [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_subject').'']) !!}
    <!-- /END SUBJECT -->

    <!-- CONTENT -->
    {!! Form::label(trans('mail::mail_admin.mail_content').':') !!}
    {!! Form::textarea('mail_content', $request->get('mail_content'), 
        array(
            'rows' => '4', 
            'class' => 'form-control', 
            'placeholder' => trans('mail::mail_admin.mail_content'))
        ) !!}
    <!-- /END CONTENT -->

    <!-- ATTACH FILE -->
    {!! Form::label(trans('mail::mail_admin.mail_attach_file').':') !!}
    {!! Form::file('fileToUpload') !!}
    <!-- /END ATTACH FILE -->
</div>
<!-- /END MAIL -->