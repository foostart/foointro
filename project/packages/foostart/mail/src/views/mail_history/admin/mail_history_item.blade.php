@if( ! $mails_histories->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>
                {{ trans('mail::mail_admin.order') }}
            </td>

            <!-- MAIL ID -->
            <th style='width:10%'>
                {{ trans('mail::mail_admin.mail_id') }}
            </th>
            <!-- /END MAIL ID -->

            <!-- MAIL NAME -->
            <th style='width:20%'>
                {{ trans('mail::mail_admin.mail_name') }}
            </th>
            <!-- /END MAIL NAME -->

            <!-- MAIL SUBJECT -->
            <th style='width:10%'>
                {{ trans('mail::mail_admin.mail_subject') }}
            </th>
            <!-- /END MAIL SUBJECT -->

            <!-- MAIL CONTENT -->
            <th style='width:30%'>
                {{ trans('mail::mail_admin.mail_content') }}
            </th>
            <!-- /END MAIL CONTENT -->

            <!-- MAIL OPERATION -->
            <th style='width:20%'>
                {{ trans('mail::mail_admin.operations') }}
            </th>
            <!-- /END MAIL OPERATION -->
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $mails_histories->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($mails_histories as $mail)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>

            <!-- MAIL ID -->
            <td>
                {!! $mail->mail_history_id !!}
            </td>
            <!-- /END MAIL ID -->

            <!-- MAIL NAME -->
            <td>
                {!! $mail->mail_history_name !!}
            </td>
            <!-- /END MAIL NAME -->

            <!-- MAIL SUBJECT -->
            <td>
                {!! $mail->mail_history_subject !!}
            </td>
            <!-- /END MAIL SUBJECT -->

            <td>
                <!-- ATTACHED FILE AND DOWNLOAD -->
                {!! $mail->mail_history_content !!}
                @if(!empty($mail->mail_history_attach))
                    <a href="{{ URL::route('admin_mail.mail_history_get_attach', ['id' => $mail->mail_history_id]) }}"><i class="fa fa-download" aria-hidden="true"></i></a>
                @endif
                <!-- /END ATTACHED FILE AND DOWNLOAD -->
            </td>
            <td>

                <!-- FORWARD BUTTON -->
                <a href="{!! URL::route('admin_mail.mail_forward', ['id' => $mail->mail_history_id]) !!}"><i class="fa fa-share fa-2x"></i></a>
                <!-- /END FORWARD BUTTON -->

                <!-- DELETE BUTTON -->
                <a href="{!! URL::route('admin_mail.mail_history_delete',['id' =>  $mail->mail_history_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <!-- /END DELETE BUTTON -->

                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">

    <!-- MESSAGE -->
	<h5>
		{{ trans('mail::mail_admin.message_find_failed') }}
	</h5>
    <!-- /END MESSAGE -->

 </span>
@endif
<div class="paginator">
    {!! $mails_histories->appends($request->except(['page']) )->render() !!}
</div>