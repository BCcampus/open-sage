{{--
Template Name: OER Stats
--}}

@extends('layouts.full')

@section('content')
	@include('partials.child-menu-mobile')
	@include('partials.page-header')
<div class="row">
	<aside id="sidebar" class="col-lg-3 mt-2">
		@include('partials.sidebar')
	</aside>
	<div class="col-md-9">
		@include('partials.oer-stats')
	</div>
</div>
@endsection