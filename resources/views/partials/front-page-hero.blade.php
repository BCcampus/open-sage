<div class="row">
    <div class="col-md-6">
        <h2>{{ get_the_title($get_hero_page_id) }}</h2>
        <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_hero_page_id)}}</p>
        <a class="btn btn-primary" href="{{ get_permalink($get_hero_page_id) }}" role="button">Learn More</a>
    </div>
    <div class="col-md-6">
        {!! get_the_post_thumbnail($get_hero_page_id) !!}
    </div>
</div>
