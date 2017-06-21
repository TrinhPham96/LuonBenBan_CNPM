@extends('templates.master')
@section('title','Bệnh')
@section('main')
	<div class = "content">
		@include('module.sick_leftCont')
		@include('module.sick_rightCont')
	</div>
@stop