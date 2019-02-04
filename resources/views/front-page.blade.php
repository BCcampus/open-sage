@extends('layouts.front')

@section('content')
    <span itemscope itemtype="http://schema.org/ItemPage">
		<div class="row">
			@include('partials.front-page-hero')
		</div>
		<div class="row">
			@include('partials.search-collection')
		</div>
		<div class="row">
			@include('partials.front-page-cards')
		</div>
  	</span>
@endsection
