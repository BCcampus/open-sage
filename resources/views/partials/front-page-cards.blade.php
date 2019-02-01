<section class="homepage-cards d-flex flex-row flex-wrap">
        <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
            <a href="{{ get_permalink($get_left_card_id) }}" class="img-link">
                <div class="featured-topic row-fluid d-flex" style="background-image: url({!! get_the_post_thumbnail_url($get_left_card_id) !!});">
                    <h4 itemprop="name" class="blue-bkgd text-inverse col-sm mt-auto text-center m-0 p-2">{{get_the_title($get_left_card_id)}}
                    </h4>
                </div>
            </a>
            <div class="row-fluid min-height-md">
                <p class="p-3">
                    @if (has_excerpt($get_left_card_id))
                        {{ get_the_excerpt($get_left_card_id) }}
                    @else
                        Please add excerpt text in your page to replace this message.
                    @endif
                </p>
                <div class="col text-center">
                    <a class="btn btn-primary mb-3" href="{{ get_permalink($get_left_card_id) }}" role="button">Learn More</a>
                </div>
            </div>
            <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_left_card_id)}}"/>
            <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_left_card_id) !!}"/>
            <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_left_card_id) }}"/>
            <meta itemprop="headline" content="{{get_the_title($get_left_card_id)}}"/>
            <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
        </article>

    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_right_card_id) }}" class="img-link">
            <div class="featured-topic row-fluid d-flex" style="background-image: url({!! get_the_post_thumbnail_url($get_right_card_id) !!});">
                <h4 itemprop="name" class="blue-bkgd text-inverse col-sm mt-auto text-center m-0 p-2">{{get_the_title($get_right_card_id)}}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">
                @if (has_excerpt($get_right_card_id))
                    {{ get_the_excerpt($get_right_card_id) }}
                @else
                    Please add excerpt text in your page to replace this message.
                @endif
            </p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3" href="{{ get_permalink($get_right_card_id) }}" role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_left_card_id)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_right_card_id) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_right_card_id) }}"/>
        <meta itemprop="headline" content="{{get_the_title($get_right_card_id)}}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>