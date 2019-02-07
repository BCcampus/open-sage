{{--
  Template Name: OER
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
    <div class="row">
        @include('partials.collection-search')
    </div>

@endsection