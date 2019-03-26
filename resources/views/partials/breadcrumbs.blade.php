<div class="wrap container-fluid" role="document">
	@if( (! is_front_page()) && ! is_page(['subscribe', 'subscribe-confirm']))
		<nav class="breadcrumb pt-3" itemscope itemtype="http://schema.org/BreadcrumbList">
			@foreach ( $bread_crumbs as $key => $item )
				<span class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				@if ( empty( $item['link'] ) )
						<span itemscope itemtype="http://schema.org/Thing" itemprop="item">
						<span itemprop="name">{{ esc_html( $item['title'] ) }}</span>
					</span>
					@else
						<a itemscope itemtype="http://schema.org/Thing" itemprop="item"
						   href="{{ esc_url( $item['link'] ) }}"><span
									itemprop="name">{{ esc_html( $item['title'] ) }}</span></a>
					@endif
					<meta itemprop="position" content="<?php echo esc_attr( $key + 1 ); ?>"/>
				</span>
			@endforeach
		</nav>
@endif
