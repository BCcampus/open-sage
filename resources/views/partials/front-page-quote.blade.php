<section class="d-flex flex-row flex-wrap full-width p-4">
<div class="col-md-6 bkgd-grey-light p-4">
    <p class="quote font-weight-light py-3">{{\App\Controllers\App::getPostExcerpt($get_quote_page_id)}}</p>
</div>
<div class="col-md-6 p-0">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_quote_page_id)}});">
    </div>
</div>
</section>
