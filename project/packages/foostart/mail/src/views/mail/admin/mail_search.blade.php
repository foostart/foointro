
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('mail::mail_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_mail','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('mail_name', trans('mail::mail_admin.mail_name_label')) !!}
            {!! Form::text('mail_name', @$params['mail_name'], ['class' => 'form-control', 'placeholder' => trans('mail::mail_admin.mail_name_placeholder')]) !!}
        </div>
        <!--/END TITLE-->

        <!--SEARCH BUTTON-->
        {!! Form::submit(trans('mail::mail_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        <!--/END SEARCH BUTTON-->
        
        {!! Form::close() !!}
    </div>
</div>


