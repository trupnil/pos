<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layout.common.link')
    @stack('other-links')
  </head>
  <body>
    <div class="main-wrapper" id="main-wrapper">
      <div class="preloader">
        <div class="loader">
          <div class="loader__figure"></div>
          <p class="loader__label">Point Of sale</p>
        </div>
      </div>
    
@include('layout.common.header')
@include('layout.common.sidebar')
@yield('main-content')
</div>
@include('layout.common.footer')
@include('layout.common.script')
@stack('other-scripts')
</body>
</html>