@extends('layouts.top_buttom')

@section('active')
<li><a href="/home#blog_section">Home</a></li> 
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
                      
                      <div  class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <br>
                        <div style="padding-bottom: 0px" class="section-title text text-left" data-aos="fade-up" data-aos-delay="100">
                          <br>
                          <h3 >MONUMEN BAMBU RUNCING DI KARANG KEDAWUNG</h3>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        {{-- <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">    “Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut. Oke, perlu kalian ketahui sebelum peristiwa Pertempuran Karang Kedawung, pasukan Brigade III/Damarwulan yang dipimpin oleh Sroedji melakukan wingate action. Apa wingate action itu? Dilansir dari laman Pusjarah TNI, wingate action adalah, “menempatkan kembali setiap pasukan ke asalnya, setelah melakukan hijrah ke luar daerah kekuasaan Belanda sebelum Perundingan Renville”. Pasca ditandatanganinya Perundingan Renville  pada tanggal 17 Januari 1948 ternyata memberikan dampak merugikan bagi Indonesia, salah satunya memicu munculnya Agresi Militer II Belanda.</p>
                          
                        </div> --}}
                        
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center" class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/1b.jpg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Monumen Bambu Runcing di Desa Karang Kedawung</i></p>
                        <p style="text-indent: 0"> sumber: <i>Dokumentasi Pribadi</i></p>
                        
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">  
                          Sebagaimana dijelaskan pada sub-bab sebelumnya, Pertempuran Karang Kedawung merupakan pertempuran yang terjadi di Desa Karang Kedawung antara pasukan Brigade III dibawah komando Sroedji melawan pasukan KNIL Belanda pada tanggal 8 Februari 1949. Pada pertempuran tersebut menyebabkan gugurnya Sroedji, dr. Soebandi, bersama anggota pasukan Brigade III lainnya. Sementara itu, untuk mengenang jasa-jasa pahlawan yang gugur dalam medan pertempuran umumnya didirikan sebuah monumen perjuangan. Adapun salah satu monumen perjuangan yang dimaksud untuk mengenang para pasukan yang gugur di Karang Kedawung tahun 1949 dikenal dengan nama Monumen Bambu Runcing atau Monumen Letkol. Moch.Sruji.
                          </p>
                          
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Monumen Bambu Runcing dibangun di tengah ladang penduduk Desa Karang Kedawung, Kecamatan Mumbulsari, Kabupaten Jember. Pembangunan monumen tersebut dilakukan oleh para pamong desa bersama rakyat dengan gotong-royong berdasarkan hasil keputusan oleh kepala desa setempat, Haji Abdul Ladim (Kartomihardjo, Saptono, and Soekarsono 1986). Dana yang digunakan untuk pembagunan monumen berasal dari swadaya masyarakat sekaligus hibah lurah setempat. Adanya inisiatif masyarakat setempat bersama kepala desa untuk pembangunan Monumen Bambu Runcing diniliai dapat sejalan dengan pengalaman empiris di Indonesia.  
                            </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 3 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Menurut Armand (2013) pembangunan monumen ditujukan sebagai bentuk manifestasi suatu kekuasaan untuk memberi penegasan atas kekuatan dari kekuasaannya, sehingga secara geometris dan geografis memiliki fungsi ruang publik sekaligus ruang dalam tatanan sosial masyarakatnya. Merujuk pernyataan tersebut, jika dianalisis adanya pembangunan Monumen Bambu Runcing di Desa Karang Kedawung secara tersirat ingin menyampaikan bahwa pertempuran tersebut benar-benar terjadi disana. Adanya bambu runcing pada monumen sebagai salah satu senjata yang digunakan oleh para pejuang kemerdekaan Indonesia dalam perang menghadapi Belanda, sehingga dapat memperkuat lokasi kejadian pertempuran di Karang Kedawung sekaligus mampu menyampaikan sepucuk informasi kepada masyarakat setempat khususnya bagi generasi penerus meraka tentang sisi historinya. 
                          </p>
                        </div>
                      </div>
                      
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <h2>1</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            {{-- <a href="/tabloid"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary">Prev</button></a> --}}
                            {{-- <a class="back-to-top" style="background-color:orangered; border-color:orangered"></a> --}}
                            <a data-target="#carouselExampleCaptions" data-slide-to="1" ><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up"> Next</button></a>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <!--halaman 2 -->
                    <div class="row no-gutters">
                      <!-- paragraf 1 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-top: 2rem; margin-bottom: 0rem" class="description">
                          Selain itu, jika diperhatikan secara seksama pada ujung Monumen Bambu Runcing dicat warna merah yang artikan sebagai lambang senjata tradisional Indonesia yang dapat melawan musuh hingga terluka bahkan terbunuh (Kartomihardjo et al. 1986). Tidak hanya itu, disamping Monumen Bambu Runcing terdapat prasasti atau cenderamata yang bertuliskan nama-nama pasukan Brigade III yang gugur dalam pertempuran. Adapun nama-nama pasukan tersebut diantaranya
                            <br/>
                            <br/>1.	Letkol. Mochammad Sroedji
                            <br/>2.	Letkol. dr. Soebandi
                            <br/>3.	P. Slamet
                            <br/>4.	P. Asban
                            <br/>5.	P. Sakduni
                            <br/>6.	Djuahir
                            <br/>7.	Asan
                            <br/>8.	Tobin
                            <br/>9.	Dulla
                            <br/>10. Kawi
                            <br/>11.	Aswir
                            <br/>12.	Da’i
                            <br/>13.	Sahri
                            <br/>14.	P. Nursija
                            <br/>15.	Sudar
                            <br/>16.	Sagidin
                            <br/>17.	P. Srakmo
                            <br/>18.	P. Satridja

                          </p>
                        </div>
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center" class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/3b.jpg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Cenderamata Nama-Nama Pasukan yang Gugur di Pertempuran Karang Kedawung</i></p>
                        <p style="text-indent: 0"> sumber: <i>Dokumentasi Pribadi </i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">  
                            Ingin melihat langsung monumen Bambu Runcing di Desa Karang Kedawung? Kalian bisa banget mengunjungi langsung monumen tersebut. Jika kalian tidak tahu, bisa dilacak melalui GPS kok. 
                          </p>
                          
                        </div>
                      </div>
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <!-- paragraf 2 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="text-indent: 0in;" style="margin-bottom: 0rem" class="description">
                            <b><span>Referensi :</span> </b>
                            <br/> - Kartomihardjo, Prayoga, Prapto Saptono, dan Soekarsono. 1986. <i> Monumen Perjuangan Jawa Timur.</i> Jakarta: Departemen Pendidikan dan Kebudayaan.
                          </p>
                        </div>
                      </div>
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <h2>2</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a data-target="#carouselExampleCaptions" data-slide-to="0"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
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
              <br>
              <h4 class="sidebar-title">Daftar Bacaan Lain</h4> 
              <hr>
              <ul class="list-unstyled">
                  <li class="media my-4">
                        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/foto artikel pertama/1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="/tabloid7">Mengenal Garis Demarkasi, Penyebab Resimen 40/Damarwulan Hijrah Ke Wilayah Republik</a></h5> 9 Juli, 2022
                        </div>
                  </li>
                  <li class="media">
                      <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1.jpg" alt="Generic placeholder image">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"><a href="/tabloid">Wingate Action Pasukan Brigade III/Damarwulan ke Besuki</a></h5>16 Juli, 2022
                      </div>
                  </li>
                  <li class="media my-4">
                      <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1b.jpg" alt="Generic placeholder image">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"><a href="/tabloid2">Pertempuran Karang Kedawung Tahun 1949</a></h5> 23 Juli, 2022
                      </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/4.jpeg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="/tabloid3">Histori Brigade III/Damarwulan</a></h5> 30 Juli, 2022
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/seruji2.jpeg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="/tabloid4">Mengenal Lebih Dekat Komandan Brigade III/Damarwulan, Letkol. Sroedji</a></h5>6 Agustus, 2022
                    </div>
                  </li>
                  <li class="media my-4">
                      <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1b.jpg" alt="Generic placeholder image">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"><a href="/tabloid5">Monumen Bambu Runcing di Karang Kedawung</a></h5> 13 Agustus, 2022
                      </div>
                        <i class='fa fa-arrow-circle-left' style='color: orange'></i>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/subandi2.jpeg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="/tabloid6">Sang Dokter Gugur di Pertempuran Karang Kedawung, Dr. Soebandi</a></h5>20 Agustus, 2022 
                    </div>
                  </li>
                  <li class="media">
                      <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/3.jpeg" alt="Generic placeholder image">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"><a href="/tabloidtest"> Yuk Uji Pemahaman Kalian Tentang Pertempuran Karang Kedawung</a></h5> 27 Agustus, 2022
                      </div>
                  </li>
              </ul>
            </div>
        </div>
    </div>
</div>
    <!-- end side bar -->

    @endsection

    @section('js')
    <script>
      $(".scroll-up").click(function() {
        $("html").animate({ scrollTop: 0 }, "slow");
        });
    </script>
    @endsection