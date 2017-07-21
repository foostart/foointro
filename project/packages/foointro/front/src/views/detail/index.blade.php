@extends('front::layout.masterpage')

@section('title')
    Detail
@stop

@section('header_style')
	{!! HTML::style('foointro/front/css/atd_detail.css') !!}
@stop

@section('header_script')
	{!! HTML::script('foointro/front/js/module_menu.js') !!}
	{!! HTML::script('foointro/front/js/scrolltotopconten2.js') !!}
	{!! HTML::script('foointro/front/js/selectMenu.js') !!}
@stop

@section('body_style')
	data-spy="scroll" data-target=".navbar" data-offset="50"
@stop

@section('content')
	@include('front::detail.partial.breadcrumbs')
	@include('front::detail.partial.anchored_menu')
	@include('front::detail.partial.banner')
	@include('front::detail.partial.specifications')
	@include('front::detail.partial.download')
	@include('front::detail.partial.features')
	@include('front::detail.partial.benefits')
	@include('front::detail.partial.contacts')
	@include('front::detail.partial.related_products')
	@include('front::detail.partial.latest_industry')
@stop