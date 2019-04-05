<section class="d-flex flex-row flex-wrap full-width no-gutters mt-3">
<div class="col-md-6 bkgd-grey-light">
    <p class="quote font-weight-light pt-4 px-5">{{\App\Controllers\App::getPostExcerpt($get_quote_page_id)}}</p>
</div>
<div class="col-md-6">
    <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_quote_page_id)}});">
    </div>
</div>
</section>
