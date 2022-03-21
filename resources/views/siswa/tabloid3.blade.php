@extends('layouts.top_buttom')

@section('active')
<li><a href="/home">Home</a></li> 
<li class="active" ><a  style="-webkit-text-fill-color: rgb(248, 109, 59)" href="#">Tabloid</a></li> 
@endsection
@section('isi')

  
    <!-- side bar -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
          <!-- ======= artikel Section ======= -->
          <section id="about" class="about">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
              <h2 style="-webkit-text-fill-color: rgb(248, 109, 59)">PERTEMPURAN KARANG KEDAWUNG</h2>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
            <!-- carousel -->
            <div class="container">
              <div id="carouselExampleCaptions" class="carousel slide" data-interval="0" data-ride="carousel">
                
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <!-- Halaman 1 -->
                    <div class="row no-gutters">
                      
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <br>
                        <div class="section-title text text-center" data-aos="fade-up" data-aos-delay="100">
                          
                          <h3>YUK UJI PEMAHAMAN KALIAN TENTANG PERTEMPURAN KARANG KEDAWUNG</h3>
                          <hr>
                        </div>
                        
                      </div>
                      <div class="col-lg-12 video-box text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/gambar/3.jpeg" class="img-fluid" alt="gambar" width="500">
                      </div>
                      <!-- paragraf 1 -->
                      
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">Setelah kalian membaca dua artikel sebelumnya, sebagaimana yang telah kita ketahui bahwa Pertempuran Karang Kedawung tidak terlepas dari peristiwa Agresi Militer Belanda II yang mendorong pasukan Brigade III/Damarwulan melakukan wingate action. Nah, pertempuran yang berlangsung tanggal 8 Februari 1949 di Desa Karang Kedawung mendorong timbulnya beberapa korban jiwa, salah satunya Sroedji sebagai pemimpin pasukan Brigade III.
                            </p>
                        </div>
                      </div>
                      
                      
                      <!-- paragraf 2 -->
                      
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Nah, dari serangkaian peristiwa sebelum hingga meletusnya Pertempuran Karang Kedawung, admin ingin mengetahui seberapa paham kalian. Yuk, mari kerjakan soal-soal yang telah admin sediakan.
                          </p>
                        </div>
                      </div>
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <div class="text text-center mt-4"data-aos="fade-up" data-aos-delay="400">
                            {{-- <a href="/tabloid"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary">Prev</button></a> --}}
                            {{-- <a class="back-to-top" style="background-color:orangered; border-color:orangered"></a> --}}
                            <a href="/soal" ><button style="padding: 10px 150px ; background-color:orangered; border-color:orangered " class="btn btn-primary"> Mulai</button></a>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
              <!-- end caarousel-->
            </div>
          </section><!-- End About Us Section -->

        </div>
        <div class="col-md-3 mb40" data-aos="fade-up" data-aos-delay="1000">
            <div class="mb40">
                {{-- <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                        <button class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </form> --}}
                <br>
            </div>
            
            <div>
                <h4 class="sidebar-title">Bacaan Lain</h4> 
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="/tabloid">1. Sebelum Pertempuran Karang Kedawung, Pasukan Brigade III/Damarwulan...</a></h5>1 Maret 2022
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1b.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="/tabloid2">2. Berperang Melawan Belanda Di Karang Kedawung Pasca Kemerdekaan</a></h5> 1 Maret 2022
                        </div>
                    </li>
                    <li class="media">
                        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/3.jpeg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a>3. Yuk Uji Pemahaman Kalian Tentang Pertempuran Karang Kedawung</a></h5> 1 Maret 2022
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!-- end side bar -->

    @endsection

    