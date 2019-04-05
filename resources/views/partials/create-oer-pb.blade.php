<section class="d-flex flex-row flex-wrap full-width no-gutters mt-3">
<div class="col-md-6">
    <h2>{!! get_the_title($get_pb_create_oer) !!}</h2>
    <p class="py-3">{{\App\Controllers\App::getPostExcerpt($get_pb_create_oer)}}</p>
    <a class="btn btn-primary mb-3" aria-label="Read more about {!! get_the_title($get_pb_create_oer) !!}" href="{{\App\Controllers\App::maybeGuid($get_pb_create_oer, get_post_field('post_name', $get_pb_create_oer))}}" role="button">Learn More</a>
</div>
<div class="col-md-6">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_pb_create_oer)}});">
    </div>
</div>
</section>