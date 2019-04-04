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
    <div class="row">
        <h3>Find open textbooks</h3>
        <p>The B.C. Open Textbook Collection is home to a growing selection of open textbooks for a variety of subjects
            and specialties. Discover open textbooks that have been reviewed by faculty, meet our accessibility
            requirements, and/or include ancillary materials (quizzes, test banks, slides, videos, etc.).</p>
    </div>
    <div class="row">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
    <div class="row">
        @include('partials.collection-latest-additions')
    </div>
    <div class="row">
        @include('partials.collection-guides-toolkits')
    </div>
    <div class="row">
        @include('partials.oer-cards')
    </div>
@endsection