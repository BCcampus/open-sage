@extends('layouts.full')

@section('content')
    <span itemscope itemtype="http://schema.org/ItemPage">
        @include('partials.front-page-hero')
        @include('partials.collection-search')
        @include('partials.front-page-cards')
        @include('partials.collection-stats')
        @include('partials.front-page-quote')
        @include('partials.collection-guides')
  	</span>
@endsection
