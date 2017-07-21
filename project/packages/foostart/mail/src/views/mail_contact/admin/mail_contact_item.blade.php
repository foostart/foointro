@if( ! $contacts->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>
                {{ trans('mail::mail_admin.order') }}
            </td>

            <!-- contact ID -->
            <th style='width:10%'>
                {{ trans('mail::mail_admin.contact_id') }}
            </th>
            <!-- /END contact ID -->

            <!-- contact NAME -->
            <th style='width:55%'>
                {{ trans('mail::mail_admin.contact_address') }}
            </th>
            <!-- /END contact NAME -->

            <!-- contact OPERATION -->
            <th style='width:20%'>
                {{ trans('mail::mail_admin.operations') }}
            </th>
            <!-- /END contact OPERATION -->

        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $contacts->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($contacts as $contact)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>

            <!-- contact ID -->
            <td>
                {!! $contact->contact_id !!}
            </td>
            <!-- /END contact ID -->

            <!-- contact NAME -->
            <td>
                {!! $contact->contact_address !!}
            </td>
            <!-- /END contact NAME -->

            <td>

                <!-- DELETE BUTTON -->
                <a href="{!! URL::route('admin_mail.mail_contact_delete',['id' =>  $contact->contact_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <!-- /END DELETE BUTTON -->

                <!-- REPLY contact BUTTON -->
                <a href="{!! URL::route('admin_mail.mail_contact_reply',['id' =>  $contact->contact_id, '_token' => csrf_token()]) !!}" class="margin-left-5"><i class="fa fa-reply fa-2x"></i></a>
                <!-- /END REPLY contact BUTTON -->

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
		{{ trans('contact::contact_admin.message_find_failed') }}
	</h5>
    <!-- /END MESSAGE -->

 </span>
@endif
<div class="paginator">
    {!! $contacts->appends($request->except(['page']) )->render() !!}
</div>