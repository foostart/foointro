<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="foointro/front/image/favicon.ico" />
	@include('front::layout.head')
	@yield('header_style')
	@yield('header_script')
</head>
<body @yield('body_style')>
	@include('front::layout.header')
	@yield('content')
	@include('front::layout.footer')
	@include('front::layout.scroll_to_top')
	@yield('footer_script')
</body>
</html>