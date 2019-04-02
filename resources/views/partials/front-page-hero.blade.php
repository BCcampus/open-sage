<section class="d-flex flex-row flex-wrap full-width pt-4">
<div class="col-md-6 bkgd-blue-navy p-4">
    <h2>{!! get_the_title($get_hero_page_id) !!}</h2>
    <p class="py-3">{{\App\Controllers\App::getPostExcerpt($get_hero_page_id)}}</p>
    <a class="btn btn-primary" aria-label="Read more about {!! get_the_title($get_hero_page_id) !!}" href="{{\App\Controllers\App::maybeGuid($get_hero_page_id, get_post_field('post_name', $get_hero_page_id))}}" role="button">Learn More</a>
</div>
<div class="col-md-6 p-0">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_hero_page_id)}});">
    </div>
</div>
</section>
