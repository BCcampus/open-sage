@if(is_page())

    @php($hasChildren = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' ))
    @php($isChild = get_post_ancestors($post->ID))

    <!-- Prevent returning a menu of all pages when no children, display on child pages also -->
    @if((($isChild || $hasChildren )))
        <!-- Display everywhere except mobile -->
        <ul class="d-none d-md-block nav flex-column children-menu">
            {!! wp_list_pages( [
          'depth'        => 2,
          'child_of'     => \App\Controllers\App::getChildOf( $post->ID ),
          'title_li'     => '',
          'sort_column'  => 'menu_order, post_title',
          'item_spacing' => 'preserve'
          ] ); !!}
        </ul>
        @php(dynamic_sidebar('sidebar-primary'))
    @endif
@else
    @php(dynamic_sidebar('sidebar-s'))
@endif
