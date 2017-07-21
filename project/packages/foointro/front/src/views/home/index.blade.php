@extends('front::layout.masterpage')

@section('title')
    Home
@stop

@section('header_style')
	{!! HTML::style('foointro/front/css/atd_home.css') !!}
@stop

@section('header_script')
	{!! HTML::script('foointro/front/js/slideshow.js') !!}
	{!! HTML::script('foointro/front/js/slideshow2.js') !!}
	{!! HTML::script('foointro/front/js/slideshow3.js') !!}
	{!! HTML::script('foointro/front/js/atd_1.js') !!}
	{!! HTML::script('foointro/front/js/scrolltotopmenu.js') !!}
@stop

@section('content')
	@include('front::home.partial.banner')
	@include('front::home.partial.featured_product')
	@include('front::home.partial.featured_service')
	@include('front::home.partial.latest_industry')
@stop