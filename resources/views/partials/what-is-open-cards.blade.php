<section class="homepage-cards d-flex flex-row flex-wrap full-width">
    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open2) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open2)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open2)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open2, get_post_field('post_name', $get_what_is_open2))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open2)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open2) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open2) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open2)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>

    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open3) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open3)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open3)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open3, get_post_field('post_name', $get_what_is_open3))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open3)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open3) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open3) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open3)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>

<section class="homepage-cards d-flex flex-row flex-wrap full-width mt-3">
    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open4) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open4)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open4)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open4, get_post_field('post_name', $get_what_is_open4))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open4)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open4) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open4) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open4)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>

    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open5) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open5)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open5)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open5, get_post_field('post_name', $get_what_is_open5))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open5)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open5) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open5) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open5)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>

<section class="homepage-cards d-flex flex-row flex-wrap full-width mt-3">
    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open6) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open6)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open6)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open6, get_post_field('post_name', $get_what_is_open6))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open6)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open6) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open6) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open6)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>

    <article class="homepage-cards-item col-md-6 mb-2" itemscope itemtype="http://schema.org/Article">
        <a href="{{ get_permalink($get_what_is_open7) }}" class="img-link">
            <div class="row-fluid d-flex">
                <h4 itemprop="name"
                    class="blue-bkgd-special text-inverse col-sm mt-auto text-center m-0 p-2">{!!get_the_title($get_what_is_open7)!!}
                </h4>
            </div>
        </a>
        <div class="row-fluid min-height-md">
            <p class="p-3">{{\App\Controllers\App::getPostExcerpt($get_what_is_open7)}}</p>
            <div class="col text-center">
                <a class="btn btn-primary mb-3"
                   href="{{\App\Controllers\App::maybeGuid($get_what_is_open7, get_post_field('post_name', $get_what_is_open7))}}"
                   role="button">Learn More</a>
            </div>
        </div>
        <meta itemprop="author" content="{{\App\Controllers\App::getPostAuthor($get_what_is_open7)}}"/>
        <meta itemprop="image" content="{!! get_the_post_thumbnail_url($get_what_is_open7) !!}"/>
        <meta itemprop="datePublished" content="{{ get_post_time('c', true, $get_what_is_open7) }}"/>
        <meta itemprop="headline" content="{!!get_the_title($get_what_is_open7)!!}"/>
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="BCCampus"/>
				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url"
                          content="https://bccampus.ca/wp-content/themes/bcc-sage/dist/images/bccampus-logo.png"/>
				</span>
			</span>
    </article>
</section>