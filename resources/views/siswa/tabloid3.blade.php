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
                          <h3 >HISTORI BRIGADE III/DAMARWULAN</h3>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        {{-- <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">    “Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut. Oke, perlu kalian ketahui sebelum peristiwa Pertempuran Karang Kedawung, pasukan Brigade III/Damarwulan yang dipimpin oleh Sroedji melakukan wingate action. Apa wingate action itu? Dilansir dari laman Pusjarah TNI, wingate action adalah, “menempatkan kembali setiap pasukan ke asalnya, setelah melakukan hijrah ke luar daerah kekuasaan Belanda sebelum Perundingan Renville”. Pasca ditandatanganinya Perundingan Renville  pada tanggal 17 Januari 1948 ternyata memberikan dampak merugikan bagi Indonesia, salah satunya memicu munculnya Agresi Militer II Belanda.</p>
                          
                        </div> --}}
                        
                      </div>
                      <!-- gambar -->
                    
                      <div style="text-align: center" class="col-lg-10 video-box about-content" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/4.jpeg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;"><i>Moh. Hatta didampingi seorang perwira berjalan melintasi barisan TNI Tahun 1949 </i></p>
                        <p style="text-indent: 0"> sumber: <i>IPPHOS ANRI</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">    Apakah kalian pernah mendengar kata “brigade”? Atau belum pernah sama sekali? Brigade diartikan sebagai angkatan bersenjata. Untuk saat ini, salah satu angkatan bersenjata di Indonesia adalah Tentara Nasional Indonesia (TNI).</p>
                          
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">Dalam lintas sejarah Indonesia, TNI didirikan pada tanggal 3 Juni 1947. Pada tahun tersebut, kondisi Indonesia masih berada dibawah kekuasaan Belanda. Buktinya ketika Perundingan Renville ditandatangani pada tanggal 17 Januari 1948 yang memaksa setiap pasukan TNI melakukan “hijrah” atau pindah ke wilayah yang masih bagian dari Republik Indonesia. 
                            </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 3 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Di wilayah Jawa Timur, ada beberapa daerah yang dikuasai oleh Indonesia dan Belanda setelah Perundingan Renville. Daerah yang masih bagian dari Republik Indonesia yaitu Karesidenan Bojonegoro, Karesidenan Kediri, dan Karesidenan Madiun. Sedangkan daerah yang dikuasai Belanda yaitu Karesidenan Malang, Karesidenan Surabaya, dan Karesidenan Besuki. Resimen 40/Damarwulan yang saat itu berada di Karesidenan Besuki terpaksa melakukan hijrah menuju ke Karesidenan Malang, kemudian ke Karesidenan Kediri.   
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 4 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Tidak lama kemudian, kabinet Amir Sjarifuddin turun jabatan dan digantikan kabinet Hatta I. Kabinet tersebut menetapkan kebijakan Reorganisasi dan Rasionalisasi (Rera) Angkatan Perang, termasuk TNI. Namun sayangnya, ketika program tersebut akan terlaksana timbul peristiwa PKI Madiun pada tanggal 18 September 1948.   
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
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <br>
                          <p style="margin-bottom: 0rem" class="description">
                            Setelah gerakan PKI Madiun 1948 berhasil ditumpas, Resimen 40/Damarwulan saat itu berganti status menjadi Brigade Mobile Damarwulan dibawah komandan Letnan Kolonel Mochammad Sroedji. Tugas pasukan tersebut adalah membersihkan sisa-sisa pemberontakkan PKI Madiun yang masih bertebaran di Blitar.  
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>

                     
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Setelah semua antek-antek pemberontakkan PKI Madiun benar-benar ditumpaskan, kesatuan militer Jawa Timur kembali melaksanakan program Rera yang sempat tertunda. Dengan sah, tanggal 1 November 1948 Kolonel Soengkono dilantik sebagai Panglima Divisi I Jawa Timur. Selanjutnya peresmian pasukan-pasukan Divisi I Jawa Timur dilaksanakan tanggal 17 Desember 1948 di Lapangan Kuwak, Kediri.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Pasukan-pasukan Divisi I Jawa Timur saat itu terdiri dari 6 brigade. Untuk Brigade Mobile Damarwulan berganti menjadi Brigade III/Damarwulan dengan komandan tetap,\ Letkol. Mochammad Sroedji. 
                          </p>
                        </div>
                        
                      </div>
                      
                      <!-- paragraf 4 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Markas besar Brigade III/Damarwulan terletak di Blitar, sedangkan markas batalyon-batalyonnya ditempatkan secara terpisah. Batalyon 25 yang dengan komandan Mayor Sjafiuddin terletak di Wlingi. Batalyon 26 yang dikomandoi oleh E.J. Magenda terletak di Malang. Batalyon 27 dengan komandannya Mayor Soedarmin terletak di Ngunut dan Batalyon Depot di Djengkol (Kediri) dibawah komandan Mayor Darsan Iroe. 

                          </p>
                        </div>
                      </div>
                      <!-- paragraf 5 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Setelah program Rera selesai terlaksana dengan sempurna, sayangnya Belanda mengkhianati Perundingan Renville. Buktinya pada tanggal 19 Desember 1948 terjadi Agresi Militer Belanda II. Pasukan Belanda menyerang wilayah Republik Indonesia yaitu Yogyakarta.
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 6 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Atas peristiwa tersebut, Panglima Besar Jenderal Soedirman memerintahkan setiap pasukan TNI melakukan wingate action, termasuk Brigade III/Damarwulan untuk kembali ke wilayah asalnya yaitu Karesidenan Besuki. 
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
                            <a data-target="#carouselExampleCaptions" data-slide-to="2"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Next</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  
                  <div class="carousel-item ">
                    <!--halaman 4 -->
                    <div class="row no-gutters">
                      
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="text-indent: 0in;" style="margin-bottom: 0rem" class="description">
                            <b><span>Referensi :</span> </b>
                            <br/> - Arifin, Idrus Rahman. 2018. <i> "Reorganisasi Dan Rasionalisasi Angkatan Perang Republik Indonesia (1947-1950) Membangun Organisasi Militer Yang Efektif Dan Efisien."</i> Universitas Negeri Jakarta.
                            <br/> - Dinas Sejarah TNI AD. 1982. Sejarah TNI-AD 1945-1973. Bandung: Dinas Sejarah TNI AD.
                            <br/> - Penerangan Angkatan Darat. 1957.  <i>“Menembus Gunung Semeru.”.</i> Penerangan Angkatan Darat, Juli.
                            <br/> - Proyek Penelitian dan Pencatatan Kebudayaan Daerah. 1978. Sejarah Daerah Jawa Timur. Jakarta: Departemen Pendidikan dan Kebudayaan.
                            Semdam VIII/Brawidjadja. 1968. Sam Karya Bhirawa Anoraga, Sejarah Militer Kodam VIII/Brawijaya. Malang: Semdam VIII/Brawidjadja.
                            
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <h2>3</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a data-target="#carouselExampleCaptions" data-slide-to="1"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                            
                            {{-- <a href="{{route('soal')}}"><button style="background-color:#ff4500; border-color:orangered " class="btn btn-primary">Next</button></a> --}}
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
              <br>
              <h4 class="sidebar-title">Daftar Bacaan Lain</h4> 
              <hr>
              <ul class="list-unstyled">
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