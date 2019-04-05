{{--
  Template Name: What is Open Ed
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
        @include('partials.what-is-open-card')
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-in-template')
        @endwhile
@endsection