@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('mail::mail_admin.mail_sent') }}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin"><i class="fa fa-group"></i> {!! $request->all() ? trans('mail::mail_admin.page_search') : trans('mail::mail_admin.mail_sent') !!}</h3>
                </div>
                
                <!--MESSAGE-->
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success flash-message">
                        {!! $message !!}
                    </div>
                @endif
                <!--MESSAGE-->

                <!--ERRORS-->
                @if($errors && ! $errors->isEmpty() )
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger flash-message">
                            {!! $error !!}
                        </div>
                    @endforeach
                @endif 
                <!--ERRORS-->

                <!-- ITEM -->
                <div class="panel-body">
                    @include('mail::mail_history.admin.mail_history_item')
                </div>
                <!-- /END ITEM -->

            </div>
        </div>

        <!-- SEARCH -->
        <div class="col-md-3">
            @include('mail::mail_history.admin.mail_history_search')
        </div>
        <!-- /END SEARCH -->

    </div>
</div>
@stop

@section('footer_scripts')
<script>
    $(".delete").click(function () {
        return confirm("Are you sure to delete this item?");
    });
</script>
@stop