{{--
  Template Name: Create OER
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    @include('partials.create-oer-hero')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-in-template')
    @endwhile
    @include('partials.collection-guides-toolkits')
    @include('partials.create-oer-pb')
    @include('partials.use-open-page-guides')
@endsection