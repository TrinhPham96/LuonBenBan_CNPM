@extends('templates.master')
@section('title', 'Trang chủ')
@section('main')

<div class="top_banner">
	<!-- SVG Arrows -->
	@include('module.banner')

</div>
	@include('module.content')
@stop