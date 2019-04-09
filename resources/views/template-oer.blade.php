{{--
  Template Name: OER
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @include('partials.collection-search')
    <h3>Find open textbooks</h3>
    <p>The B.C. Open Textbook Collection is home to a growing selection of open textbooks for a variety of subjects
        and specialties. Discover open textbooks that have been reviewed by faculty, meet our accessibility
        requirements, and/or include ancillary materials (quizzes, test banks, slides, videos, etc.).</p>
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-in-template')
    @endwhile
    @include('partials.collection-latest-additions')
    @include('partials.collection-guides-toolkits')
    @include('partials.oer-cards')
@endsection