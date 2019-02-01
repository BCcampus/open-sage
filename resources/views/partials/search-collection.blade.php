@php
    $link = site_url() . '/find-open-textbooks';
    $nonce = wp_create_nonce('find-oer')
@endphp
<section class="bkgd-grey-light full-width py-4 px-5">
    <h4 class="text-center text-blue-navy">Search the BC Open Textbook Collection</h4>
    <form class='form-group input-group' action='{{$link}}' method='post' role="search">
        <label for="find-oer-1" class="sr-only">Search the BC Open Textbook Collection</label>
        <input type='text' class='form-control' placeholder='my search terms' name='find-oer' id='find-oer-1' aria-label="search terms" aria-describedby="find-oer-2"/>
        <div class="input-group-append">
            <button type='submit' class='btn btn-primary' id="find-oer-2">Search Collection</button>
        </div>
        <input type='hidden' value='{{$nonce}}'/>
    </form>
</section>
