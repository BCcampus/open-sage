@php
    $args = (isset($_POST)) ? $_POST : $_GET;
@endphp
<span itemscope itemtype="https://schema.org/Book">
    {{ \App\Controllers\App::getCollection( $args ) }}
</span>