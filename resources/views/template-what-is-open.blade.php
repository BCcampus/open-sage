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
        @include('partials.what-is-open-cards')
    </div>
    <div class="row">
        @include('partials.use-open-page-guides')
    </div>
@endsection