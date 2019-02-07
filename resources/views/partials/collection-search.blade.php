@php
    $link = get_home_url() . '/find-open-textbooks';
    $nonce = wp_create_nonce('find-oer');
    $bkgd = (is_page_template(['views/template-oer.blade.php'])) ? 'bkgd-blue-navy' : 'bkgd-grey-light';
@endphp
<section class="{{$bkgd}} full-width py-4 px-5 mb-3">
    <h4 class="text-center text-blue-navy">Search the BC Open Textbook Collection</h4>
    <form class='form-group input-group' action='{{$link}}' method='get' role="search">
        <label for="find-oer-1" class="sr-only">Search the BC Open Textbook Collection</label>
        <input type='text' class='form-control' placeholder='my search terms' name='search' id='find-oer-1' aria-label="search terms" aria-describedby="find-oer-2"/>
        <div class="input-group-append">
            <button type='submit' class='btn btn-primary' id="find-oer-2">Search Collection</button>
        </div>
        <input type='hidden' value='{{$nonce}}'/>
    </form>
</section>
