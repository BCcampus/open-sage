<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class() @endphp>
@include('partials.microdata-open')
@include('partials.uio')
@php do_action('get_header') @endphp
@include('partials.header')
<div class="wrap container-fluid" role="document">
    @include('partials.breadcrumbs')
    <div class="content row">
        <aside id="sidebar" class="col-lg-3 mt-2">
            @include('partials.child-menu-mobile')
            @include('partials.sidebar')
        </aside>
        <main class="main col-lg-9">
            @yield('content')
        </main>
    </div>
</div>
@php do_action('get_footer') @endphp
@include('partials.footer')
@php wp_footer() @endphp
@include('partials.uio-script')
@include('partials.microdata-close')
</body>
</html>
