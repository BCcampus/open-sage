{{--
Template Name: OER Stats
--}}

@extends('layouts.full')

@section('content')
@include('partials.page-header')
<div class="row">
	<div class="col-md-9">
		@include('partials.oer-stats')
	</div>
	<div class="col-md-3">
		@include('partials.sidebar')
	</div>
</div>
@endsection