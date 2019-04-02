<section class="oer-cards d-flex flex-row flex-wrap full-width">
        <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
            <a href="{{ get_permalink($get_oer_left_card_id) }}" class="img-link">
                <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_oer_left_card_id)}});">
                    <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_oer_left_card_id)!!}
                    </h4>
                </div>
            </a>
            <div class="row-fluid min-height-md">
                <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_oer_left_card_id)}}</p>
                <div class="col text-center">
                    <a class="btn btn-primary mb-3" aria-label="Read more about {!!get_the_title($get_oer_left_card_id)!!}" href="{{\App\Controllers\App::maybeGuid($get_oer_left_card_id, get_post_field('post_name', $get_oer_left_card_id))}}" role="button">Learn More</a>
                </div>
            </div>
            <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_oer_left_card_id)}}"/>
            <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_oer_left_card_id) !!}"/>
            <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_oer_left_card_id) }}"/>
            <meta itemprop="headline" content="{!!get_the_title($get_oer_left_card_id)!!}"/>
            <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
        </article>

    <article class="oer-cards col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_oer_right_card_id) }}" class="img-link">
            <div class="featured-topic row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_oer_right_card_id)}});">
                <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_oer_right_card_id)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_oer_right_card_id)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3" aria-label="Read more about {!!get_the_title($get_oer_right_card_id)!!}" href="{{\App\Controllers\App::maybeGuid($get_oer_right_card_id, get_post_field('post_name', $get_oer_right_card_id))}}" role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_oer_right_card_id)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_oer_right_card_id) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_oer_right_card_id) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_oer_right_card_id)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>