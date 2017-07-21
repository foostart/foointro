<!-- MAIL -->
<div class="form-group">
     <?php $mail_history_subject = $request->get('mail_subject') ? $request->get('mail_subject') : @$mail_history->mail_history_subject ?>

     <?php $mail_history_content = $request->get('mail_content') ? $request->get('mail_content') : @$mail_history->mail_history_content ?>

     <?php $mail_history_attach = $request->get('mail_titlename') ? $request->get('mail_history_attach') : @$mail_history->mail_history_attach ?>

    <!-- MAIL ADDRESS -->
    {!! Form::label(trans('mail::mail_admin.mail_name').':') !!}
    {!! Form::text('mail_name', $request->get('mail_name'), [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_name').'', 
        'autofocus']) !!}
    <!-- /END MAIL ADDRESS -->

    <!-- SUBJECT -->
    {!! Form::label(trans('mail::mail_admin.mail_subject').':') !!}
    {!! Form::text('mail_subject', $mail_history_subject, [
        'class' => 'form-control', 
        'placeholder' => trans('mail::mail_admin.mail_subject').'']) !!}
    <!-- /END SUBJECT -->

    <!-- CONTENT -->
    {!! Form::label(trans('mail::mail_admin.mail_content').':') !!}
    {!! Form::textarea('mail_content', $mail_history_content, 
        array(
            'rows' => '4', 
            'class' => 'form-control',
            'placeholder' => trans('mail::mail_admin.mail_content'))
        ) !!}
    <!-- /END CONTENT -->

    @if($mail_history_attach != null)
        {!! Form::label(trans('mail::mail_admin.mail_attached_file').':') !!}
        <!-- <iframe src="{{ public_path().'/'.$mail_history_attach }}" frameborder="0" style="width:100%;min-height:640px;"></iframe> -->
        {!! Form::text('mail_attach', $mail_history_attach, ['hidden']) !!}
        {!! $mail_history_attach !!}
        <a href="{{ URL::route('admin_mail.mail_history_get_attach', ['id' => $mail_history->mail_history_id]) }}">
            <i class="fa fa-download" aria-hidden="true"></i>
        </a>
        <br>
    @endif

    <!-- ATTACH FILE -->
    {!! Form::label(trans('mail::mail_admin.mail_attach_file').':') !!}
    {!! Form::file('fileToUpload') !!}
    <!-- /END ATTACH FILE -->
</div>
<!-- /END MAIL -->