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
        @include('partials.collection-latest-additions')
    </div>
    <div class="row">
        @include('partials.collection-guides-toolkits')
    </div>
    <div class="row">
        <h3>B.C. open textbook MARC records</h3>
        <p>Gain access to machine-readable cataloguing (MARC) records for all of the content created for BCcampus Open
            Education.</p>
        <h3>Other collections</h3>
        <p>The B.C. Open Textbook Collection continues to expand, so we’ve compiled a list of open textbook libraries to
            connect you with the open educational resources (OER) you may need for your institution.</p>
    </div>
    <div class="row">
        @include('partials.oer-cards')
    </div>
@endsection