{{--
  Template Name: Find OER
--}}

@extends('layouts.full')

@section('content')
    @include('partials.page-header')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
    <div class="row">
        <aside id="accordion-catalogue-menu" class="col-md-3">
            @include('partials.collection-menu')
        </aside>
        <div class="col-md-9">
            @include('partials.collection-find-oer')
        </div>
    </div>
@endsection
