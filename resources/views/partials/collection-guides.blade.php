@php
    $link = get_home_url() . '/find-open-textbooks/?subject=Guides';
    $subject = ['subject' => 'Guides'];
@endphp
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width mt-3">
    <div class="col-12 py-3 text-center text-white">
        <h4>Getting Started</h4>
        {{--<p>{{ \App\Controllers\App::getCollection($subject) }}</p>--}}
        <a class="btn btn-primary" href="{{$link}}" role="button">Browse All Guides and Toolkits</a>
    </div>
</section>