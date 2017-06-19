@extends('templates.master')
@section('title', 'Danh sách bác sĩ')
	@section('main')

	<div class = "content">
		@include('module.listDoctor_leftCont')
		@include('module.listDoctor_rightCont')
	</div>


@stop