{{--
  Template Name: Find OER
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-find-oer')
    @endwhile
@endsection