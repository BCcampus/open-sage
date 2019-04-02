{{--
  Template Name: Create OER
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="row">
        @include('partials.create-oer-hero')
    </div>
    <div class="row">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
    <div class="row">
        @include('partials.collection-guides-toolkits')
    </div>
    <div class="row">
        @include('partials.create-oer-pb')
    </div>
    <div class="row">
        @include('partials.use-open-page-guides')
    </div>
@endsection