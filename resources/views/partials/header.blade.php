<header class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="py-2 col-md-6"><a class="navbar-brand" href="{{ site_url('/') }}">
                    <img src="@asset('images/logo-sm.png')" alt="Logo for Open Education"></a>
            </div>
            <div class="d-none d-md-block p-2 col-md-4 justify-content-end shady-bkgd-md">
                <nav class="navbar navbar-light bg-faded rounded navbar-expand-md header_navigation">
                    <div id="containerNavbar1">
                        @if (has_nav_menu('header_navigation'))
                            {!! wp_nav_menu([
                            'theme_location' => 'header_navigation',
                            'menu' => 'Header Navigation',
                            'menu_class' => 'navbar-nav ml-auto',
                            'depth' => 1,
                            'echo' => true,
                            'fallback_cb' => '__return_empty_string' ]) !!}
                        @endif
                    </div>
                </nav>
            </div>
            <div class="p-2 col-md-2 shady-bkgd-md">
                {{get_search_form()}}
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light rounded navbar-expand-md primary_navigation px-sm-2">
            <div class="container-fluid">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                        data-target="#containerNavbar2" aria-controls="containerNavbar2" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="containerNavbar2">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu' => 'Primary Navigation',
                        'container_class' => 'navbar-collapse',
                        'menu_class' => 'nav navbar-nav',
                        'depth' => 2,
                        'echo' => true,
                        'fallback_cb' => '__return_empty_string',
                        'walker' => $nav_walker ]) !!}
                    @endif
                </div>
            </div>
        </nav>
</header>
