{{--
  Template Name: Advocate for Open Education
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    @include('partials.advocate-oer-hero')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-in-template')
    @endwhile
@endsection