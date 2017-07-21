<!-- MAIL -->
<div class="form-group">
    <?php $contact_name = $request->get('contact_name') ? $request->get('contact_name') : @$mail_contact->contact_address ?>

    <!-- MAIL ADDRESS -->
    {!! Form::label('Mail to: ') !!}
    {!! Form::label($name, $contact_name, trans('mail::mail_admin.name').':') !!}
    {!! Form::hidden('mail_name', $contact_name) !!}
    {!! Form::hidden('reply', 'reply') !!}
    <!-- /END MAIL ADDRESS -->
    <br>
    <!-- SUBJECT -->
    {!! Form::label(trans('mail::mail_admin.mail_subject').':') !!}
    {!! Form::text('mail_subject', $request->get('mail_subject'), [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_subject').'', 
        'autofocus']) !!}
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