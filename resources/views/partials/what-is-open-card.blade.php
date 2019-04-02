<section class="d-flex flex-row flex-wrap full-width mb-4">
    <div class="col-md-6 bkgd-blue-navy p-3">
        <h2>{!! get_the_title($get_what_is_open1) !!}</h2>
        <p class="py-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open1)}}</p>
        <a class="btn btn-primary mb-3"  aria-label="Read more about {!! get_the_title($get_what_is_open1) !!}" href="{{\App\Controllers\App::maybeGuid($get_what_is_open1, get_post_field('post_name', $get_what_is_open1))}}" role="button">Learn More</a>
    </div>
    <div class="col-md-6 p-0">
        <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_what_is_open1)}});">
        </div>
    </div>
</section>