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
                          <h3 >SANG DOKTER GUGUR DI PERTEMPURAN KARANG KEDAWUNG, DR. SOEBANDI</h3>
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
                        <img  src="assets/img/gambar/subandi.jpeg" class="img-fluid" alt="gambar" width="300">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>dr. Soebandi </i></p>
                        <p style="text-indent: 0"> sumber: <i>Kabarjateng.co.id</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Nama dr. Soebandi saat ini diabadikan sebagai nama tempat fasilitas yang bergelut dibidang kesehatan, seperti SMK Farmasi dr. Soebandi bahkan RSUD dr. Soebandi yang sama-sama berlokasikan di Kecamatan Patrang, Kabuputen Jember. Taukah kalian? Sebenarnya Soebandi adalah seorang dokter yang ikut berperang bersama Sroedji di Karang Kedawung?
                          </p>
                          
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Sebelum mengetahui alasan beliau bisa ikut dalam berperang bersama Sroedji di Karang Kedawung, yuk kita mengenalnya terlebih dahulu. 
                            </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Raden Mas Soebandi, lahir di Klakah pada tanggal 17 Agustus 1917 dari pasangan Raden Soeradi Wiknyosukarto dan Mariam. Ayah Soebandi berprofersi sebagai kepala stasiun kereta api (Nederlandsh Indische Spoorweg Maatschappy) di Klakah. Istri Soebandi bernama Raden Roro Soekesi dan dikaruniai tiga anak, Widiyasmani, Widiyastuti, dan Widorini.
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 4 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Pada masa pemerintahan Hindia-Belanda dr. Soebandi bersekolah di HIS, MULO, dan menempuh pendidikan kedokteran di NIAS. Ketika Jepang datang ke Indonesia pada tahun 1942 NIAS ditutup, sehingga pada 29 April 1943 melanjutkan pendidikan kedokteran di Ika Daigoku Jakarta.  Dr. Soebandi lulus pada tanggal 12 November 1943 dan melanjutkan pendidikan atau kepelatihan menjadi eise shodanco. Pada tanggal 20 November 1943 beliau baru dilantik menjadi eise shodanco.
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
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            KARIR DALAM BIDANG MILITER
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Dr. Soebandi terjun dalam bidang militer ketika secara resmi menjadi eise shodanco dokter tentara Peta Daidan Lumajang pada tanggal 27 Desember 1943. Setelah Peta dibubarkan, dr. Soebandi tetap bertugas menjadi dokter di RSUD Probolinggo. 
                          </p>
                        </div>
                      </div>
                     
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Ketika BKR didirikan, dr. Soebandi bergabung dengan BKR dengan pangkat letnan kolonel. Namun, pangkatnya turun menjadi kapten disaat mendapat tugas di RST Celaket Malang. Pada tanggal 5 Oktober 1945, pangkat dr. Soebandi naik menjadi Mayor ketika BKR beralih menjadi TKR.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Dr. Soebandi mulai mendapatkan tugas di Jember sebagai kepala berpangkat letnan kolonel di Rumah Sakit DKT pada tahun 1946. Selama berdinas di DKT beliau pernah kepergok menolong seorang tentara dari TKR, sehingga mengakibatkan dr. Soebandi ditahan oleh tentara Belanda. Setelah itu, dr. Soebandi ikut serta melakukan gerilya di front pertahanan Surabaya Selatan, Sidoarjo, Tulangan, Porong, Bangil, bahkan hingga Bekasi.
                          </p>
                        </div>
                        
                      </div>
                      
                      <!-- paragraf 4 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Masih dalam nuansa perang pasca kemerdekaan, dr. Soebandi kemudian bergabung dengan Resimen 40/Damarwulan Divisi III TKR yang saat itu dikomandoi oleh Sroedji dengan jabatan sebagai kepala staf. Kerap bersama Sroedji, dr. Soebandi juga bergabung dalam SGAP sebagai kepala staf saat penumpasan antek-antek PKI Madiun 1948. Hingga pada akhirnya ketika Brigade Mobile Damarwulan telah beralih menjadi Brigade III/Damarwulan, dr. Soebandi tetap menjadi bagian pasukan tersebut. Jabatan dr. Soebandi dalam Brigade III/Damarwulan adalah kepala kesehatan. 
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
                  <div class="carousel-item">
                    <!--halaman 3 -->
                    <div class="row no-gutters">
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <br>
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            GUGUR BERSAMA SROEDJI DI PERTEMPURAN KARANG KEDAWUNG
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>

                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Ketika melakukan wingate action, dr. Soebandi ikut serta hijrah bersama pasukan Brigade III ke Besuki, tidak lupa bersama Sroedji. Sayangnya, ketika sampai di Karang Kedawung, pasukan Brigade III diserang oleh pasukan KNIL. Disaat memberikan pertolongan kepada Sroedji yang dalam kondisi terluka, dr. Soebandi tertembak dan gugur ditempat. Sroedji yang saat itu terluka tetap melanjutkan perlawanan hingga tertembak dan gugur ditempat. 
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Jenazah dr. Soebandi kemudian ditemukan ditepi sawah di Dusun Plalangan, Desa Karang Kedawung. Saat ditemukan jenazah beliau dibawa ke DKT untuk disemayamkan. Tanggal 26 Maret 1950 dr. Soebandi kembali disemayamkan di TMP Kreongan, dan semayamkan kembali di TMP Patrang pada tanggal 15 Agustus 1960. Atas jasanya, dua sahabat Sroedji dan dr. Soebandi diabadikan dalam sebuah monumen yang dapat kita lihat setiap hari ketika memasuki Jember, jika kalian datang dari arah barat. 
                          </p>
                        </div>
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center" class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/subandi2.jpeg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Patung Sroedji dan dr. Soebandi.</i></p>
                        <p style="text-indent: 0"> sumber: <i>Dokumentasi Pribadi</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Memories never die, Sroedji-Soebandi. Definisi sahabat sejati, hingga titik darah penghabisan.    
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 4 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="text-indent: 0in;text-indent: 0" style="margin-bottom: 0rem" class="description">
                            <b><span>Referensi :</span> </b>
                            <br/> - Agusni, Indropo. 2016. Kiprah Dokter NIAS - Djakarta Ika Daigaku Dalam Sejarah Republik Indonesia. Surabaya: Airlangga University Press.
                            <br/> - Hakim, R. Z. 2020. Durahem. Yogyakarta: Pinggir.  
                            <br/> - Huda, Afton Ilman, dan Saman Hudi. 2012. Pahlawan Jember. Jember: UIJ Kyai Mojo.
                            <br/> - Semdam VIII/Brawidjadja. 1968. Sam Karya Bhirawa Anoraga, Sejarah Militer Kodam VIII/Brawijaya. Malang: Semdam VIII/Brawidjadja.

                          </p>
                        </div>
                      </div>
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <h2>3</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a data-target="#carouselExampleCaptions" data-slide-to="1"><button  style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
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