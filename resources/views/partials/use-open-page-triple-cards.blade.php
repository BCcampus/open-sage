<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<section class="homepage-cards d-flex flex-row flex-wrap full-width">
        <article class="homepage-cards-item col-md-4 mb-2" itemscope itemtype="http://schema.org/Article">
            <a href="{{ get_permalink($get_use_open_triple_left_id) }}" class="img-link">
                <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_use_open_triple_left_id)}});">
                    <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{{get_the_title($get_use_open_triple_left_id)}}
                    </h4>
                </div>
            </a>
            <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_use_open_triple_left_id)}}"/>
            <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_use_open_triple_left_id) !!}"/>
            <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_use_open_triple_left_id) }}"/>
            <meta itemprop="headline" content="{{get_the_title($get_use_open_triple_left_id)}}"/>
            <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
        </article>

    <article class="homepage-cards-item col-md-4 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_use_open_triple_middle_id) }}" class="img-link">
            <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_use_open_right_card_id)}});">
                <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{{get_the_title($get_use_open_triple_middle_id)}}
                </h4>
            </div>
        </a>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_use_open_triple_middle_id)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_use_open_triple_middle_id) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_use_open_triple_middle_id) }}"/>
        <meta itemprop="headline" content="{{get_the_title($get_use_open_triple_middle_id)}}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>

    <article class="homepage-cards-item col-md-4 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_use_open_triple_right_id) }}" class="img-link">
            <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_use_open_right_card_id)}});">
                <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{{get_the_title($get_use_open_triple_right_id)}}
                </h4>
            </div>
        </a>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_use_open_triple_right_id)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_use_open_triple_right_id) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_use_open_triple_right_id) }}"/>
        <meta itemprop="headline" content="{{get_the_title($get_use_open_triple_right_id)}}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>