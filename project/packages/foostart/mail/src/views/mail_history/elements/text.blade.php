<!-- mail NAME -->
<div class="form-group">
    <?php $mail_name = $request->get('mail_titlename') ? $request->get('mail_name') : @$mail->mail_name ?>

    {!! Form::label($name, trans('mail::mail_admin.name').':') !!}

    <!-- MAIL ADDRESS -->
    {!! Form::text($name, $mail_name, ['class' => 'form-control', 'placeholder' => trans('mail::mail_admin.name').'']) !!}
    <!-- /END MAIL ADDRESS -->
</div>
<!-- /mail NAME -->