@php
    $args = (isset($_POST)) {$_POST};
@endphp
<span itemscope itemtype="https://schema.org/Book">
    {{ \App\Controllers\App::getCollection( $args ) }}
</span>