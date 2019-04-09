{{--
  Template Name: Browse OER
--}}

@extends('layouts.full')

@section('content')
    @include('partials.collection-menu-mobile')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
    <div class="row">
        <aside id="accordion-catalogue-menu" class="col-md-3">
            @include('partials.collection-menu')
        </aside>
        <div class="col-md-9">
            @include('partials.page-header')
            @include('partials.collection-find-oer')
        </div>
    </div>
@endsection
