
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Default stylesheets-->
    <link href="{{ asset('front/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('front/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link id="color-scheme" href="{{ asset('front/css/colors/default.css') }}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>      
      @include('home/layout/navbar')
      @yield('konten')
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="{{ asset('front/lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('front/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/lib/wow/dist/wow.js') }}"></script>
    <script src="{{ asset('front/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('front/lib/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('front/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('front/lib/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('front/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/lib/smoothscroll.js') }}"></script>
    <script src="{{ asset('front/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('front/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
  </body>
</html>