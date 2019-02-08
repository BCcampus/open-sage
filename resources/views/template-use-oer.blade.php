{{--
  Template Name: Use OER
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @while(have_posts()) @php the_post() @endphp
    @endwhile

@endsection