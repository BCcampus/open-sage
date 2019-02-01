@extends('layouts.front')

@section('content')
	<span itemscope itemtype="http://schema.org/ItemPage">
		<div class="row">
			{{--@include('partials.front-page-hero')--}}
		</div>
		<div class="row">
			@include('partials.search-collection')
		</div>
		<div class="row mt-sm-4">
	  	<div class="col-md-6">
			<h2>PLACEHOLDER</h2>
	  	</div>
	  	<div class="col-md-6">
			<h2>PLACEHOLDER</h2>
	  	</div>
	  	</div>
  	</span>
@endsection
