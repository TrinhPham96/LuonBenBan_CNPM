@extends('templates.master')
@section('title', 'Chi tiết bác sĩ')
@section('main')

	<div class = "content_detailsDoc">
		@include('module.detailsDoc_leftCont')
		@include('module.detailsDoc_rightCont')
	</div>

@stop