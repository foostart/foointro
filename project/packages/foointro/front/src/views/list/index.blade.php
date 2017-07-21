@extends('front::layout.masterpage')

@section('title')
    List
@stop

@section('header_style')
	<!-- {!! HTML::style('foointro/front/css/atd_home.css') !!} -->
	{!! HTML::style('foointro/front/css/atd_list.css') !!}
@stop

@section('header_script')
	{!! HTML::script('foointro/front/js/module_menu.js') !!}
	{!! HTML::script('foointro/front/js/slideshowDS.js') !!}
	{!! HTML::script('foointro/front/js/click.js') !!}
	{!! HTML::script('foointro/front/js/script.js') !!}
@stop

@section('content')
	@include('front::list.partial.banner')
	@include('front::list.partial.products')
	@include('front::list.partial.related_products')
	@include('front::list.partial.latest_industry')
@stop