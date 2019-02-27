@php
    $link = get_home_url() . '/find-open-textbooks/?subject=Guides';
    $args = [
        'subject_class_level_2' => 'Guides,Toolkits',
        'limit'                 => 4
    ];
@endphp
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width py-3 mt-3 text-center text-white">
    <div class="col-12">
        <h4 class="text-center">Getting Started</h4>
    </div>
    {{ \App\Controllers\App::getLatestAdditions($args) }}
    <div class="col-12">
        <a class="btn btn-primary" href="{{$link}}" role="button">Browse All Guides and Toolkits</a>
    </div>
</section>