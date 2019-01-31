@extends('layouts.front')

@section('content')
	<span itemscope itemtype="http://schema.org/ItemPage">
		@include('partials.front-page-hero')
        @include('partials.front-page-cards')
  </span>
@endsection
