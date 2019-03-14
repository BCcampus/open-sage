@php
    $link_suggest = get_home_url() . '/suggestion-for-the-collection/';
    $link_browse = get_home_url() . '/find-open-textbooks/';
    $args = [
        'limit'                 => 3
    ];
@endphp
<h3>Getting Started</h3>
<section class="d-flex flex-row flex-wrap full-width py-3 mt-3 text-center bkgd-grey-light">
    <div class="col-12">
        <h4 class="text-left">Latest Additions</h4>
    </div>
    @foreach(\App\Controllers\App::getLatestAdditions($args) as $book)
        <article class="col-md-4 mb-2" itemscope itemtype="http://schema.org/Article">
            <span class="badge badge-success">{{ucfirst($book['status'])}}</span><br>
            <a href="{{$book['book_url']}}">
                <img itemprop="image" class="img-polaroid" src="{{$book['cover_url']}}" alt="Image for the textbook titled {{$book['name']}}" width="151px" height="196px"/>
            </a>
            <p>{{$book['name']}}</p>
            <p>{{$book['created_date']}}</p>
        </article>
    @endforeach
    <div class="col-12 bkgd-blue-navy text-right py-2">
        <a class="text-white mr-3" href="{{$link_suggest}}">Suggest a book for the Collection <span class="fa fa-arrow-right text-blue-light"></span></a>
        <a class="text-white" href="{{$link_browse}}">Browse our Collection <span class="fa fa-arrow-right text-blue-light"></span></a>
    </div>
</section>