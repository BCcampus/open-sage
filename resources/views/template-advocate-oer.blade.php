{{--
  Template Name: Advocate for Open Education
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="row">
        @include('partials.advocate-oer-hero')
    </div>
    <div class="row">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
@endsection