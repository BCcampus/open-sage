<section class="d-flex flex-row flex-wrap full-width">
<div class="col-md-6">
    <h2>{{ get_the_title($get_hero_page_id) }}</h2>
    <p class="py-3">{{\App\Controllers\App::getPostExcerpt($get_hero_page_id)}}</p>
    <a class="btn btn-primary mb-3" href="{{\App\Controllers\App::maybeGuid($get_hero_page_id, get_post_field('post_name', $get_hero_page_id))}}" role="button">Learn More</a>
</div>
<div class="col-md-6">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_hero_page_id)}});">
    </div>
</div>
</section>