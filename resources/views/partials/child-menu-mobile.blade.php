@if(is_page())

    @php($hasChildren = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' ))
    @php($isChild = get_post_ancestors($post->ID))
    <!-- Prevent returning a menu of all pages when no children, display on child pages also -->
    @if((($isChild || $hasChildren )))

        <!-- Display the dropdown menu only on mobile -->
        <nav class="d-block d-md-none navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Browse Pages</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    style="background:#FFF">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav flex-column children-menu">
                    {!! wp_list_pages( [
                  'depth'        => 2,
                  'child_of'     => \App\Controllers\App::getChildOf( $post->ID ),
                  'title_li'     => '',
                  'sort_column'  => 'menu_order, post_title',
                  'item_spacing' => 'preserve'
                  ] ); !!}
                </ul>
            </div>
        </nav>
        @php(dynamic_sidebar('sidebar-primary'))
    @endif
@else
    @php(dynamic_sidebar('sidebar-s'))
@endif
