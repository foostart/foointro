@extends('front::layout.masterpage')

@section('title')
    Service
@stop

@section('header_style')
	{!! HTML::style('foointro/front/css/atd_services.css') !!}
@stop

@section('header_script')
	{!! HTML::script('foointro/front/js/slideshowservices.js') !!}
	{!! HTML::script('foointro/front/js/scrolltotopconten2.js') !!}
	{!! HTML::script('foointro/front/js/script.js') !!}
@stop

@section('content')
	<div class="backgroud">
		@include('front::service.partial.breadcrumbs')
		@include('front::service.partial.product_services')
		@include('front::service.partial.product_services_content')
		@include('front::service.partial.industry_services')
		@include('front::service.partial.latest_industry')
	</div>
@stop