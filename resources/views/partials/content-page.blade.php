<div class="entry-content" itemprop="text">
    @php the_content() @endphp
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'open-sage'), 'after' => '</p></nav>']) !!}
</div>