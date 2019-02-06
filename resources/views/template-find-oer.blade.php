{{--
  Template Name: Find OER
--}}

@extends('layouts.full')

@section('content')
    @include('partials.page-header')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
    <div class="row">
        @include('partials.content-find-oer')
    </div>
@endsection
