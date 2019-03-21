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
        @while(have_posts())
            {!! the_post() !!}
            @include('partials/content-page')
        @endwhile
    </div>
@endsection