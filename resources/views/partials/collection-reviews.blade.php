@php
    $args = $_GET;
@endphp
<span itemscope itemtype="https://schema.org/Book">
    {{ \App\Controllers\Page::getReviews( $args ) }}
</span>