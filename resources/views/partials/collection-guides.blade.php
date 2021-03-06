@php
    $link = get_home_url() . '/find-open-textbooks/?subject=Support%20Resources';
    $args = [
    	'subject_class_level2' => 'Use OER, Create/Adapt OER',
        'limit'                 => 4,
        'featured'              => true,
    ];
@endphp
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width py-3 mt-3 text-center text-white">
    <div class="col-12">
        <h3 class="text-center">Getting Started</h3>
    </div>
    @foreach(\App\Controllers\App::getLatestAdditions($args) as $book)
        <article class="col-md-3 mb-2" itemscope itemtype="http://schema.org/Article">
            <span class="badge badge-success">{{ucfirst($book['status'])}}</span><br>
            <a href="{{$book['book_url']}}">
                <img itemprop="image" class="img-polaroid" src="{{$book['cover_url']}}" alt="Image for the textbook titled {{$book['name']}}" width="151px" height="196px" />
            </a>
            <p>{{$book['name']}}</p>
        </article>
    @endforeach
    <div class="col-12">
        <a class="btn btn-primary" href="{{$link}}" role="button">Browse All Guides and Toolkits</a>
    </div>
</section>