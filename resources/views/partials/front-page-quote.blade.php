<section class="d-flex flex-row flex-wrap full-width p-4">
<div class="col-md-6 bkgd-grey-light p-4">
    <h2>{!! get_the_title($get_quote_page_id) !!}</h2>
    <p class="py-3">{{\App\Controllers\App::getPostExcerpt($get_quote_page_id)}}</p>
    <a class="btn btn-primary" href="{{\App\Controllers\App::maybeGuid($get_quote_page_id, get_post_field('post_name', $get_quote_page_id))}}" role="button">Learn More</a>
</div>
<div class="col-md-6 p-0">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_quote_page_id)}});">
    </div>
</div>
</section>
