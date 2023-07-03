<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}">
    <!-- AOS Animate -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos-animate/dist/aos.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('image/' . $about->icon) }}" type="image/x-icon">

    @section('title')
      @if(request()->is('/'))
          Home
      @elseif(request()->is('about'))
          About
      @elseif(request()->is('management'))
          Management
      @elseif(request()->is('certificate'))
          Certificate
      @elseif(request()->is('services'))
          Services
      @elseif(request()->is('gallery'))
          Gallery
      @elseif(request()->is('news'))
          News
      @elseif(request()->is('contact'))
          Contact
      @elseif(request()->is('services/aircraft'))
          Aircraft
      @elseif(request()->is('services/component'))
          Component
      @elseif(request()->is('services/specialized'))
          Specialized
      @elseif(request()->is('services/calibration'))
          Calibration
      @endif
    @endsection
    <title>@yield('title') - {{ $about->name_1 }}</title>
  </head>
  <body>
		<!-- Navbar -->
    @include('layouts.navbar')

		<!-- Konten -->
		@yield('content')

		<!-- Footer -->
    @include('layouts.footers')

		<script src="{{ asset('assets/vendor/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos-animate/dist/aos.js') }}"></script>
    <!-- custom css -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

  </body>
</html>