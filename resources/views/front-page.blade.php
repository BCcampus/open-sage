@extends('layouts.full')

@section('content')
    <span itemscope itemtype="http://schema.org/ItemPage">
		<div class="row">
			@include('partials.front-page-hero')
		</div>
		<div class="row">
			@include('partials.collection-search')
		</div>
		<div class="row">
			@include('partials.front-page-cards')
		</div>
		<div class="row">
			@include('partials.collection-stats')
		</div>
				<div class="row">
			@include('partials.front-page-quote')
		</div>
		<div class="row">
			@include('partials.collection-guides')
		</div>
  	</span>
@endsection
