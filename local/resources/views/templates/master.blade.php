
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	@include('widgets.head')
</head>
<body>
	<!--header-top-->
	<div class="header-top">
		@include('widgets.header')
	</div>
	<!--//xontent-->
	
	@yield('main')
	<!--/start-footer-section-->
	@include('widgets.footer')