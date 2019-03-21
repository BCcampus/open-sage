<section class="homepage-cards d-flex flex-row flex-wrap full-width">
        <article class="homepage-cards-item col-md-6 mb-2 pl-0 py-3" itemscope itemtype="http://schema.org/Article">
            <a href="{{ get_permalink($get_left_card_id) }}" class="img-link">
                <div class="featured-cards row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_left_card_id)}});">
                    <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_left_card_id)!!}
                    </h4>
                </div>
            </a>
            <div class="row-fluid min-height-md">
                <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_left_card_id)}}</p>
                <div class="col text-center">
                    <a class="btn btn-primary mb-3" href="{{\App\Controllers\App::maybeGuid($get_left_card_id, get_post_field('post_name', $get_left_card_id))}}" role="button">Learn More</a>
                </div>
            </div>
            <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_left_card_id)}}"/>
            <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_left_card_id) !!}"/>
            <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_left_card_id) }}"/>
            <meta itemprop="headline" content="{!!get_the_title($get_left_card_id)!!}"/>
            <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
        </article>

    <article class="homepage-cards-item col-md-6 mb-2 pr-0 py-3" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_right_card_id) }}" class="img-link">
            <div class="featured-cards row-fluid d-flex" style="background-image: url({{\App\Controllers\App::getThumbUrl($get_right_card_id)}});">
                <h4 itemprop="name" class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_right_card_id)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_right_card_id)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3" href="{{\App\Controllers\App::maybeGuid($get_right_card_id, get_post_field('post_name', $get_right_card_id))}}" role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_right_card_id)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_right_card_id) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_right_card_id) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_right_card_id)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>