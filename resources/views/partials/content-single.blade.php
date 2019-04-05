<article itemscope itemtype="http://schema.org/Article" @php post_class() @endphp itemref="dateModified">
    <meta itemprop="headline" content="{!! get_the_title() !!}"/>
    <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
	<meta itemprop="name" content="BCCampus"/>
	<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
	  <meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
	</span>
  </span>
    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        <p class="byline author vcard text-uppercase">
            <small>
                {{ __('By', 'open-sage') }}
                <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
				  <span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">{{ get_the_author() }}</span>
				  </span>
                </a>
                @include('partials.entry-meta')
                <span itemprop="articleSection">{{ the_category( ', ' ) }}</span>
            </small>
        </p>
    </header>
    <div itemprop="articleBody" class="entry-content">
        @php the_content() @endphp
    </div>
    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'open-sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
</article>
