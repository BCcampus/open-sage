<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
  @include('partials.microdata-open')
  @include('partials.uio')
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <main class="main col-lg-8">
          @yield('content')
        </main>
          <aside id="sidebar" class="col-lg-3 offset-lg-1">
            @include('partials.sidebar')
          </aside>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  @include('partials.uio-script')
  @include('partials.microdata-close')
  </body>
</html>
