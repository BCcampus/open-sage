@extends('layouts.front')

@section('content')
    <span itemscope itemtype="http://schema.org/ItemPage">

          <div class="row">
    <div class="col-md-6">
     	<h2>{!! $get_hero_page->post_title !!}</h2>
        <p>{!! $get_hero_page->post_content !!}</p>
        <a class="btn btn-primary" href="{!! get_permalink($get_hero_page->ID) !!}" role="button">Learn More</a>
    </div>
    <div class="col-md-6">
		{!! get_the_post_thumbnail($get_hero_page->ID) !!}
    </div>
  </div>

        <div class="row mt-sm-4">
	  <div class="col-md-4">
PLACEHOLDER
	  </div>
	  <div class="col-md-8">
PLACEHOLDER
	  </div>
	  </div>
  <span>
@endsection
