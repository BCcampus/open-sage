{{--
  Template Name: Projects & Grants
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="row">
        @include('partials.projects-hero')
    </div>
    <div class="row">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
@endsection