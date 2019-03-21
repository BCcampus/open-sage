{{--
  Template Name: What is Open Ed
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <div class="row">
        @include('partials.what-is-open-card')
    </div>
    <div class="row">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
@endsection