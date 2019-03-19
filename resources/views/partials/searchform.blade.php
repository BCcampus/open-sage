<form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
    <label>
        <input type="search" class="search-field" aria-label="search website" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
    </label>
    <input type="submit" class="search-submit" value="{{ esc_attr_x( 'Search', 'submit button' ) }}" />
</form>