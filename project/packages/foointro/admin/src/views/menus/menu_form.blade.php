@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    Admin area: {{ trans('mail::mail_admin.page_list') }}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <i class="fa fa-group"></i> 
                        {!! 'mail' !!}
                    </h3>
                </div>
                <div class="panel-body">
                    {!! trans('mail::mail_admin.admin_mail') !!}
               </div>
           </div>
        </div>

        <!-- SEARCH -->
        <div class="col-md-4">
            @include('mail::mail.admin.mail_search')
        </div>
        <!-- /END SEARCH -->

    </div>
</div>
@stop