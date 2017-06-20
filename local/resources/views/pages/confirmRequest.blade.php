@extends('templates.master')
@section('title', 'Xác nhận yêu cầu đặt khám')
	@section('main')

	<div class = "content_confirm">
		@include('module.confirmRequest_leftCont')
		@include('module.confirmRequest_rightCont')
	</div>


@stop