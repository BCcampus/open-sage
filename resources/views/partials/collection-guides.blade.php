@php
    $link = get_home_url() . '/find-open-textbooks/?subject=Guides';
    $args = [
        'subject_class_level_2' => 'Guides,Toolkits',
        'limit'                 => 4
    ];
@endphp
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width mt-3">
    <div class="col-12 py-3 text-center text-white">
        <h4>Getting Started</h4>
        {{ \App\Controllers\App::getLatestAdditions($args) }}
        <a class="btn btn-primary" href="{{$link}}" role="button">Browse All Guides and Toolkits</a>
    </div>
</section>