<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-HISTAB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a style="-webkit-text-fill-color: rgb(248, 109, 59)" href="index.html"><span>E-HISTAB</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/w1.jpeg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">SELAMAT DATANG DI <span>E-HISTAB</span></h2>
                <p class="animate__animated animate__fadeInUp">E-HISTAB (<i>Electronic Historical Tabloid</i>) merupakan  
                  media pembelajaran interaktif berupa tabloid tentang sejarah pertempuran Karang Kedawung tahun 1949.</p>
                {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                @if (Route::has('login'))
                <div >
                    @auth
                        <a style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto"href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                 @endif
            </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/w2.jpeg');">
            <div class="carousel-container">
              <div class="carousel-content container" >
                {{-- <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2> --}}
                <p class="animate__animated animate__fadeInUp">Tabloid ini bertujuan agar kalian bisa mengetahui
                  dan memahami latar belakang hingga kronologi Pertempuran Karang Kedawung. Selain itu 
                diharapkan kalian mengenal tokoh utama di balik pertempuran ini.</p>
                @if (Route::has('login'))
                <div >
                    @auth
                        <a style="background-color:orangered; border-color:orangered "class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="background-color:orangered; border-color:orangered "class="btn-get-started animate__animated animate__fadeInUp scrollto"href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="background-color:orangered; border-color:orangered "class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                 @endif
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          {{-- <div class="carousel-item" style="background-image: url('assets/img/slide/DESAIN SKRIPSI 3.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                @if (Route::has('login'))
                <div >
                    @auth
                        <a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn-get-started animate__animated animate__fadeInUp scrollto"href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                 @endif
              </div>
            </div>
          </div> --}}

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    {{-- baru --}}
    {{-- <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">First Slide</h2>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Second Slide</h2>
              <p class="lead">This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Third Slide</h2>
              <p class="lead">This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
    </header> --}}
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
