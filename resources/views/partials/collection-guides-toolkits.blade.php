@php
    $link_browse = get_home_url() . '/find-open-textbooks/?subject=Support%20Resources';
    $args = [
    	'subject_class_level_2' => 'Guides,Toolkits',
        'limit'                 => 3,
        'random' => true,
    ];
@endphp
<section class="d-flex flex-row flex-wrap full-width py-3 mt-3 text-center bkgd-grey-light">
    <div class="col-12">
        <h4 class="text-left">Guides and Toolkits</h4>
    </div>
    @foreach(\App\Controllers\App::getLatestAdditions($args) as $book)
        <article class="col-md-4 mb-2" itemscope itemtype="http://schema.org/Article">
            <a href="{{$book['book_url']}}">
                <img itemprop="image" class="img-polaroid" src="{{$book['cover_url']}}" alt="Image for the textbook titled {{$book['name']}}" width="151px" height="196px"/>
            </a>
            <p>{{$book['name']}}</p>
        </article>
    @endforeach
    <div class="col-12 bkgd-blue-navy text-right py-2">
        <a class="text-white" href="{{$link_browse}}">Browse all Guides and Toolkits <span class="fa fa-arrow-right text-blue-light"></span></a>
    </div>
</section>