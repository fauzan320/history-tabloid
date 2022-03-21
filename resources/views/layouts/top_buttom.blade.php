{{-- @include('js/alert') --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

  <title>E-HISTAB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('sweetalert::alert')
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">

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
  <!-- css side bar -->
  <link href="assets/tambahan/side_bar.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  @yield('link')
  <!-- =======================================================
  * Template Name: Mamba - v2.5.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- css list subartikel -->
   {{-- <!-- Google font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">
   <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <!-- icofont -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionic/1.3.2/css/ionic.css">
   <!-- carousel -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
   --}}
   <style>

      p{
        text-indent: 0.5in;
      }
         
      .blog_section {
        padding-top: 5rem;
        padding-bottom: 3rem;
      }
      .blog_section .blog_content .blog_item {
        margin-bottom: 30px;
        box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
        position: relative;
        border-radius: 2px;
        overflow: hidden;
      }
      .blog_section .blog_content .blog_item:hover .blog_image img {
        transform: scale(1.1);
      }
      .blog_section .blog_content .blog_item .blog_image {
        overflow: hidden;
        padding: 0;
      }
      .blog_section .blog_content .blog_item .blog_image img {
        width: 100%;
        transition: transform 0.5s ease-in-out;
      }
      .blog_section .blog_content .blog_item .blog_image span i {
        position: absolute;
        z-index: 2;
        color: #fff;
        font-size: 18px;
        width: 38px;
        height: 45px;
        padding-top: 7px;
        text-align: center;
        right: 20px;
        top: 0;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
        background-color: #ff5e14;
      }
      .blog_section .blog_content .blog_item .blog_details {
        padding: 25px 20px 30px 20px;
      }
      .blog_section .blog_content .blog_item .blog_details .blog_title h5 a {
        color: #020d26;
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 25px;
        line-height: 32px;
        font-weight: 400;
        transition: all 0.3s;
        text-decoration: none;
      }
      .blog_section .blog_content .blog_item .blog_details .blog_title h5 a:hover {
        color: #ff5e14;
      }
      .blog_section .blog_content .blog_item .blog_details ul {
        padding: 0 3px 10px 0;
        margin: 0;
      }
      .blog_section .blog_content .blog_item .blog_details ul li {
        display: inline-block;
        padding-right: 15px;
        position: relative;
        color: #7f7f7f;
      }
      .blog_section .blog_content .blog_item .blog_details ul li i {
        padding-right: 7px;
      }
      .blog_section .blog_content .blog_item .blog_details p {
        border-top: 1px solid #e5e5e5;
        margin-top: 4px;
        padding: 20px 0 4px;
      }
      .blog_section .blog_content .blog_item .blog_details a {
        font-size: 16px;
        display: inline-block;
        color: #ff5e14;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
      }
      .blog_section .blog_content .blog_item .blog_details a:hover {
        color: #020d26;
      }
      .blog_section .blog_content .blog_item .blog_details a i {
        vertical-align: middle;
        font-size: 20px;
      }
      .blog_section .blog_content .owl-nav {
        display: block;
      }
      .blog_section .blog_content .owl-nav .owl-prev {
        position: absolute;
        left: -27px;
        top: 33%;
        border: 5px solid #fff;
        text-align: center;
        z-index: 5;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        outline: 0;
        background: #ff5e14;
        transition: all 0.3s;
        color: #fff;
      }
      .blog_section .blog_content .owl-nav .owl-prev span {
        font-size: 25px;
        margin-top: -6px;
        display: inline-block;
      }
      .blog_section .blog_content .owl-nav .owl-prev:hover {
        background: #fff;
        border-color: #ff5e14;
        color: #ff5e14;
      }
      .blog_section .blog_content .owl-nav .owl-next {
        position: absolute;
        right: -27px;
        top: 33%;
        border: 5px solid #fff;
        text-align: center;
        z-index: 5;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        outline: 0;
        background: #ff5e14;
        color: #fff;
        transition: all 0.3s;
      }
      .blog_section .blog_content .owl-nav .owl-next span {
        font-size: 25px;
        margin-top: -6px;
        display: inline-block;
      }
      .blog_section .blog_content .owl-nav .owl-next:hover {
        background: #fff;
        border-color: #ff5e14;
        color: #ff5e14;
      }

      @media only screen and (max-width: 577px) {
        .blog_section .owl-nav .owl-prev {
          left: -17px !important;
        }
        .blog_section .owl-nav .owl-next {
          right: -17px !important;
        }
      }
   </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1  class="text-light"><a style="-webkit-text-fill-color: rgb(248, 109, 59)" href="/"><span>E-HISTAB</span></a></h1>
        {{-- <img height="100%" width="100%" src="assets/img/logo oren.png" alt="image"> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="assets/img/logo oren.png" height="1000" width="100" alt="" class="img-fluid"></a> --}}
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          @yield('active')
          {{-- <li class="active" ><a href="#">Home</a></li> --}}

          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @if (Auth::user()->nilai == null)
                                     <a class="dropdown-item"  href="#"> Belum melakukan <br/> Uji Pemahaman</a>
                                  @else
                                     <a class="dropdown-item" href="#"> Nilai Uji <br/> Pemahaman = <b> {{ Auth::user()->nilai }}</b> </a> 
                                  @endif
                                   
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

   @yield('isi')

   

  <!-- ======= Footer ======= -->
  <footer style="background-color: rgb(248, 109, 59)"  id="footer">
    {{-- <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Mamba</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div> --}}

    <div class="container">
      <div  class="copyright">
        <img height="40" width="40" src="assets/img/Lambang-UM.png" class="img-fluid" alt=""> 
       <br>
        &copy; Copyright <strong><span>E-HISTAB</span></strong>
        <p style="margin-bottom: 0rem">Universitas Negeri Malang | Fakultas Ilmu Sosial 
          | Jurusan Sejarah | Prodi Pendidikan Sejarah </p>
          <p> Narahubung: Zahira Irhamni Arrovia (WA.081331209943)</p>
      </div>
      {{-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
    </div>
  </footer><!-- End Footer -->

  <a style="background-color:orangered; border-color:orangered " href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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


  <!-- Bootstrap -->
  {{-- <script src="assets/js/jquery.js"></script>  --}}
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

  @yield('js')
  
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- sweetalert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('js/alert')

   <!-- Template JS subartikel  -->  
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <!-- carousel -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> --}}


  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,   
    smartSpeed: 3000, 
    autoplayTimeout:7000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
  </script>
</body>

</html>