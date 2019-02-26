{{--
  Template Name: Use OER
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <div class="row">
        @include('partials.use-open-page-cards')
    </div>
    <div class="row">
        @include('partials.use-open-page-triple-cards')
    </div>
@endsection