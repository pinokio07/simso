<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="{{asset('/img/icon.png')}}" rel="icon">
  <link href="{{asset('/img/icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('landing')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('landing')}}/css/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('landing')}}/fontawesome-free/css/all.min.css">
  <style type="text/css">
    .card-tools{
      float: right;
      margin-right: -.625rem;
    }
    button[aria-expanded=true] .fa-plus {
       display: none;
    }
    button[aria-expanded=false] .fa-minus {
       display: none;
    }
  </style>
  <!-- =======================================================
  * Template Name: Bootslander - v2.1.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @yield('header')
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background: rgba(1, 4, 136, 0.9);">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        {{-- <h1 class="text-light"><a href="/"><span>Simso</span></a></h1> --}}
        {{-- Uncomment below if you prefer to use an image logo --}}
        <a href="/"><img src="{{asset('/img/logo-web.png')}}" alt="" class="img-fluid"></a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        @auth
          @if (Request::segment(1) != 'gantipassword')
            @include('layouts.client._navbar')
          @endif 
        @endauth                       
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('content')
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: rgba(1, 4, 136, 0.9);>    
    <div class="container bg-primary">
      <div class="copyright pt-2">
        &copy; Copyright <strong><span>Simso</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="{{asset('landing')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('landing')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('landing')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  {{-- <script src="{{asset('landing')}}/vendor/php-email-form/validate.js"></script> --}}
  <script src="{{asset('landing')}}/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('landing')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('landing')}}/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('landing')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('landing')}}/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('landing')}}/js/main.js"></script>
  <script src="{{asset('landing')}}/js/validate.js"></script>
  @yield('footer')
</body>
</html>