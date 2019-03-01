@php
    $args = $_GET;
@endphp
<span itemscope itemtype="https://schema.org/Book">
    {{ \App\Controllers\App::getReviews( $args ) }}
</span>