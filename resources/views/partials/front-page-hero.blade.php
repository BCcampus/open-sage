<div class="row">
    <div class="col-md-6">
        <h2>{{ get_the_title($get_hero_page_id) }}</h2>
        <p>@if (has_excerpt($get_hero_page_id))
                {{ get_the_excerpt($get_hero_page_id) }}
            @else
                Please add excerpt text in your page to replace this message.
            @endif
        </p>

        <a class="btn btn-primary" href="{{ get_permalink($get_hero_page_id) }}" role="button">Learn More</a>
    </div>
    <div class="col-md-6">
        {!! get_the_post_thumbnail($get_hero_page_id) !!}
    </div>
</div>
