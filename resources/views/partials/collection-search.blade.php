@php
    $link = get_home_url() . '/find-open-textbooks';
    $nonce = wp_create_nonce('find-oer');
    $bkgd = (is_page_template(['views/template-oer.blade.php', 'views/template-find-oer.blade.php'])) ? 'blue-navy' : 'grey-light';
@endphp
<section class="bkgd-{{$bkgd}} full-width py-4 px-5 mb-3">
        <h2 class="text-center">Search the B.C. Open Textbook Collection</h2>
        <form class='form-group input-group mb-0' action='{{$link}}' method='get' role="search">
        <label for="find-oer-1" class="sr-only">Search the BC Open Textbook Collection</label>
        <input type='text' class='form-control' placeholder='Search...' name='search' id='find-oer-1' aria-label="Search open textbook collection" aria-describedby="find-oer-2"/>
        <div class="input-group-append">
            <button type='submit' class='btn btn-primary' id="find-oer-2">Search</button>
        </div>
        <input type='hidden' value='{{$nonce}}'/>
    </form>
</section>
