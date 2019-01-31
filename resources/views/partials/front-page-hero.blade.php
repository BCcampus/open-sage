<div class="row">
    <div class="col-md-6">
        <h2>{{ $get_hero_page->post_title }}</h2>
        <p>@if (has_excerpt($get_hero_page->ID))
                {{ get_the_excerpt($get_hero_page->ID) }}
            @else
                Please add excerpt text in your page to replace this message.
            @endif
        </p>

        <a class="btn btn-primary" href="{{ get_permalink($get_hero_page->ID) }}" role="button">Learn More</a>
    </div>
    <div class="col-md-6">
        {!! get_the_post_thumbnail($get_hero_page->ID) !!}
    </div>
</div>
