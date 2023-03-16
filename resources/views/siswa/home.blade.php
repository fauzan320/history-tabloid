@extends('layouts.top_buttom')

@section('active')
<li class="active" ><a  style="-webkit-text-fill-color: rgb(248, 109, 59)"href="#">Home</a></li> 
@endsection

@section('isi')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-interval="false">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 0 -->
          <div class="carousel-item active" id="vanta-container">
            <div class="carousel-container">
              <div class="carousel-content container">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
                <script>
                VANTA.GLOBE({
                  el: "#vanta-container",
                  mouseControls: true,
                  touchControls: true,
                  gyroControls: false,
                  minHeight: 200.00,
                  minWidth: 200.00,
                  scale: 1.00,
                  scaleMobile: 1.00,
                  color: 0xff553f

                })
                </script>
                {{-- <script src="three.r134.min.js"></script>
                <script src="vanta.globe.min.js"></script>
                <script>
                VANTA.GLOBE({
                  el: "#your-element-selector",
                  mouseControls: true,
                  touchControls: true,
                  gyroControls: false,
                  minHeight: 200.00,
                  minWidth: 200.00,
                  scale: 1.00,
                  scaleMobile: 1.00,
                  color: 0xf57200,
                  backgroundColor: 0x7071b
                })
                </script> --}}
                {{-- <h2 class="animate__animated animate__fadeInDown"> <span>E-HISTAB</span></h2> --}}
                <img width="45%" height="auto" src="assets/img/LOGO PUTIH.png" alt="">
                {{-- <a href="#blog_section" style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
              </div>
            </div>
          </div>
          <!-- Slide 1 -->
          <div class="carousel-item "  style="background-image: url('assets/img/slide/w1.jpeg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">SELAMAT DATANG DI <span>E-HISTAB</span></h2>
                <p class="animate__animated animate__fadeInUp">E-HISTAB (<i>Electronic Historical Tabloid</i>) merupakan  
                  media pembelajaran interaktif berupa tabloid tentang sejarah pertempuran Karang Kedawung tahun 1949.</p>
                <a href="#blog_section" style="background-color:#ff4500; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
                <a href="#blog_section" style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/w3.jpeg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Selamat Membaca Tabloid Ini</h2>
                <p class="animate__animated animate__fadeInUp">Tekan di bawah ini untuk membaca.</p>
                <a href="#blog_section" style="background-color:orangered; border-color:orangered " class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

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
  </section>
  <!-- End Hero -->

  <main id="main">


  
    
    <!-- side bar -->

<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <!-- ======= artikel Section ======= -->
            <section class="blog_section" id="blog_section">
              <div class="container"data-aos="fade-up" data-aos-delay="100" >
                  <div class="blog_content">
                      <h3 style="-webkit-text-fill-color: rgb(248, 109, 59)">Daftar Bacaan</h3> <hr>
                      <!-- {{-- <section id="portfolio" class="portfolio section-bg">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                          <div class="row">
                            <div class="col-lg-12">
                              <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-nasional" >Sejarah Nasional</li>
                                <li data-filter=".filter-lokal">Sejarah Lokal</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </section> --}} -->
                      <div class="owl-carousel owl-theme">
                          <div class="blog_item filter-nasional" data-aos="fade-up" data-aos-delay="100">
                              <div class="blog_image">
                                  <img class="img-fluid" src="assets/img/gambar/foto artikel pertama/1.jpg" alt="images not found">
                                  <span><i class="icon ion-md-create"></i></span>
                              </div>
                              <div class="blog_details">
                                  <div class="blog_title">
                                      <h5><a href="/tabloid7">Mengenal Garis Demarkasi, Penyebab Resimen 40/Damarwulan Hijrah Ke Wilayah Republik</a></h5>
                                  </div>
                                  <ul>
                                      <li><i class="icon ion-md-person"></i>Zahira</li>
                                      <li><i class="icon ion-md-calendar"></i>9 Juli 2022</li>
                                  </ul>
                                  <p style="text-indent: 0" >Mungkin beberapa khalayak masih belum mengetahui tentang garis demarkasi. Lantas sejak kapan istilah...</p>
                                  <a href="/tabloid7">Read More<i class="icofont-long-arrow-right"></i></a>
                              </div>
                          </div> 
                          <div class="blog_item filter-nasional" data-aos="fade-up" data-aos-delay="100">
                              <div class="blog_image">
                                  <img class="img-fluid" src="assets/img/gambar/foto artikel ke2/1.jpg" alt="images not found">
                                  <span><i class="icon ion-md-create"></i></span>
                              </div>
                              <div class="blog_details">
                                  <div class="blog_title">
                                      <h5><a href="/tabloid">Wingate Action Pasukan Brigade III/Damarwulan ke Besuki</a></h5>
                                  </div>
                                  <ul>
                                      <li><i class="icon ion-md-person"></i>Zahira</li>
                                      <li><i class="icon ion-md-calendar"></i>16 Juli 2022</li>
                                  </ul>
                                  <p style="text-indent: 0" >“Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut...</p>
                                  <a href="/tabloid">Read More<i class="icofont-long-arrow-right"></i></a>
                              </div>
                          </div>      

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="200">
                              <div class="blog_image">
                                  <img class="img-fluid" src="assets/img/gambar/1b.jpg" alt="images not found">
                                  <span><i class="icon ion-md-create"></i></span>
                              </div>
                              <div class="blog_details">
                                  <div class="blog_title">
                                      <h5><a href="/tabloid2">Pertempuran Karang Kedawung Tahun 1949</a></h5>
                                  </div>
                                  <ul>
                                    <li><i class="icon ion-md-person"></i>Zahira</li>
                                    <li><i class="icon ion-md-calendar"></i>23 Juli 2022</li>
                                  </ul>
                                  <p style="text-indent: 0">Merdeka, satu kata yang umumnya kita pahami dengan arti kebebasan. Proklamasi yang dikumandangkan oleh Ir.Soekarno...</p>
                                  <a href="/tabloid2">Read More<i class="icofont-long-arrow-right"></i></a>
                              </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                            <div class="blog_image">
                                <img class="img-fluid" src="assets/img/gambar/4.jpeg" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="/tabloid3">Histori Brigade III/Damarwulan</a></h5>
                                </div>
                                <ul>
                                  <li><i class="icon ion-md-person"></i>Zahira</li>
                                  <li><i class="icon ion-md-calendar"></i>30 Juli 2022</li>
                                </ul>
                                <p style="text-indent: 0">Apakah kalian pernah mendengar kata “brigade”? Atau belum pernah sama sekali? Brigade diartikan...</p>
                                <a href="/tabloid3">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                            <div class="blog_image">
                                <img class="img-fluid" src="assets/img/gambar/seruji2.jpeg"  alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="/tabloid4">Mengenal Lebih Dekat Komandan Brigade III/Damarwulan, Letkol. Mochammad Sroedji</a></h5>
                                </div>
                                <ul>
                                  <li><i class="icon ion-md-person"></i>Zahira</li>
                                  <li><i class="icon ion-md-calendar"></i>6 Agustus 2022</li>
                                </ul>
                                <p style="text-indent: 0">Jika kalian pernah melewati kantor bupati Kabupaten Jember pasti melihat patung besar didepannya. Nama tokoh...</p>
                                <a href="/tabloid4">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                            <div class="blog_image">
                                <img class="img-fluid" src="assets/img/gambar/1b.jpg" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="/tabloid5">Monumen Bambu Runcing di Karang Kedawung</a></h5>
                                </div>
                                <ul>
                                  <li><i class="icon ion-md-person"></i>Zahira</li>
                                  <li><i class="icon ion-md-calendar"></i>13 Agustus 2022</li>
                                </ul>
                                <p style="text-indent: 0">Umumnya untuk mengenang jasa-jasa para pejuang kemerdekaan dapat diabadikan melalui sebuah...</p>
                                <a href="/tabloid5">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                            <div class="blog_image">
                                <img class="img-fluid" src="assets/img/gambar/subandi2.jpeg" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="/tabloid6">Sang Dokter Gugur di Pertempuran Karang Kedawung, Dr. Soebandi</a></h5>
                                </div>
                                <ul>
                                  <li><i class="icon ion-md-person"></i>Zahira</li>
                                  <li><i class="icon ion-md-calendar"></i>20 Agustus 2022</li>
                                </ul>
                                <p style="text-indent: 0">Nama dr. Soebandi saat ini diabadikan sebagai nama tempat fasilitas yang bergelut dibidang kesehatan, seperti ...</p>
                                <a href="/tabloid6">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                            <div class="blog_image">
                                <img class="img-fluid" src="assets/img/gambar/cropkesimpulan.png" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="/kesimpulan">Kesimpulan Pertempuran Karang Kedawung, Dari Awal Hingga Akhir</a></h5>
                                </div>
                                <ul>
                                  <li><i class="icon ion-md-person"></i>Zahira</li>
                                  <li><i class="icon ion-md-calendar"></i>27 Agustus 2022</li>
                                </ul>
                                <p style="text-indent: 0">Pertempuran Karang Kedawung terjadi pada tahun 1949 di Desa Karang Kedawung, Kecamatan Mumbulsari, Kabupaten...</p>
                                <a href="/kesimpulan">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                          </div>

                          <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                              <div class="blog_image">
                                  <img class="img-fluid" src="assets/img/gambar/3.jpeg" alt="images not found">
                                  <span><i class="icon ion-md-create"></i></span>
                              </div>
                              <div class="blog_details">
                                  <div class="blog_title">
                                      <h5><a href="/tabloidtest"> Yuk Uji Pemahaman Kalian Tentang Pertempuran Karang Kedawung</a></h5>
                                  </div>
                                  <ul>
                                    <li><i class="icon ion-md-person"></i>Zahira</li>
                                    <li><i class="icon ion-md-calendar"></i>3 September 2022</li>
                                  </ul>
                                  <p style="text-indent: 0">Setelah kalian membaca dua artikel sebelumnya, sebagaimana yang telah kita ketahui bahwa...</p>
                                  <a href="/tabloidtest">Read More<i class="icofont-long-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </section>
          <!-- End About Us Section -->
          <!-- Salam berita -->
            <section style="margin-top: -7rem;" class="blog_section" id="blog_section">
              <div class="container"data-aos="fade-up" data-aos-delay="100" >
                  <div class="blog_content">
                    <h3 style="-webkit-text-fill-color: rgb(248, 109, 59)">Salam Redaksi</h3> <hr>
                    <div class="row no-gutters">
                      
                      <div  class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <br>
                        <div style="  margin-top: -3rem ; padding-bottom: 0px" class="section-title text text-left" data-aos="fade-up" data-aos-delay="100">
                          <br>
                          <h5 >TABLOID E-HISTAB EDISI I: PERTEMPURAN KARANG KEDAWUNG 1949</h5>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description"> Halo sobat! Salam Jas Merah dari kami menyapa para pembaca E-HISTAB. Puji syukur kami ucapkan kepada Tuhan Yang Maha Esa dengan segala anugerah-Nya edisi pertama tabloid E-HISTAB berhasil diterbitkan. Tidak lupa kami mengucapkan terima kasih kepada pihak-pihak yang ikut serta dalam proses penerbitan. E-HISTAB hadir sebagai tabloid digital yang membahas tentang sejarah lokal di Kabupaten Jember.</p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Pada edisi pertama kami mengulas peristiwa pada masa Perang Kemerdekaan II di Jember yaitu Pertempuran Karang Kedawung 1949. Alasan kami memilih ulasan tersebut adalah minimnya pengetahuan dan pemahaman generasi muda mengenai sejarah lokal disekitarnya. Terlebih minimnya informasi dalam buku teks pelajaran Sejarah Indonesia untuk tingkat SMA/MA se-derajat tentang Pertempurang Karang Kedawung 1949. </p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Terdapat beberapa artikel digital (<i>online</i>) yang telah membahas tentang Pertempuran Karang Kedawung 1949 beserta peristiwa yang berkaitan dengan alamat <i>website</i> terpisah. Namun, pada edisi kali ini redaksi berusaha mengemas susunan-susunan peristiwa tersebut menjadi artikel-artikel dalam satu edisi dan tidak terpisahkan. Sehingga informasi yang disajikan secara berurutan, menggunakan bahasa yang sederhana, memudahkan para pembaca untuk memahaminya, dan terdapat beberapa gambar pendukung dalam setiap artikel.</p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Kami berharap hadirnya tabloid E-HISTAB pada edisi pertama ini memberikan informasi terbaru dan bermanfaat bagi pembacanya, meskipun masih ada kekurangan yang perlu diperbaiki. Maka dari itu, kritik dan saran bersifat membangung dapat menjadi dasar bagi kami untuk lebih baik ke depannya.</p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 4 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Terima kasih. Selamat membaca!</p>
                          <br>
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Redaksi</p>
                          <br>
                        </div>
                      </div>

                    </div> 
                  </div>
              </div>
            </section>
          <!-- End salam berita -->
          <!-- susunan redaksi -->
          <section style="margin-top: -5rem;" class="blog_section" id="blog_section">
              <div class="container"data-aos="fade-up" data-aos-delay="100" >
                  <div class="blog_content">
                    <h3 style="-webkit-text-fill-color: rgb(248, 109, 59)">Susunan Redaksi</h3> <hr>
                    <div class="row no-gutters">
                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Pembimbing:
                            <br/> 1.	Aditya Nugroho Widiadi, S.Pd, M.Pd, Ph.D.
                            <br/> 2.	Ronal Ridhoi, S.Hum, M.A.  
                          </p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Redaksi :
                            <br/>1.	Zahira Irhamni Arrovia
                          </p>
                          <br>
                        </div>
                      </div>
                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Desain dan IT:
                            <br/> 1.	Moh. Sholihul Fauzan
                          </p>
                          <br>
                        </div>
                      </div>
                    </div> 
                  </div>
              </div>
            </section>
          <!-- End susuan redaksi -->
          <!-- alamat redaksi -->
          <section style="margin-top: -5rem;" class="blog_section" id="blog_section">
              <div class="container"data-aos="fade-up" data-aos-delay="100" >
                  <div class="blog_content">
                    <h3 style="-webkit-text-fill-color: rgb(248, 109, 59)">Alamat Redaksi</h3> <hr>
                    <div class="row no-gutters">
                      <!-- paragraf 1 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Jl. Jayanegara No. 55 Dusun Krajan, Desa Pecoro, Kecamatan Rambipuji, Kabupaten Jember. 
                          </p>
                          <br>
                        </div>
                      </div>
                    </div> 
                  </div>
              </div>
            </section>
          <!-- End alamat redaksi -->

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
                <br>
            </div>
            <!--/col-->
            <div class="mb40">
                <h4 class="sidebar-title">Info Untuk Kalian</h4>
                <hr>
                <ul class="list-unstyled categories">
                    <b>
                      <p>
                        Sejarah Nasional <br/>
                        
                      </p>
                    </b>
                    <p>Sejarah nasional adalah sejarah yang kajian sejarahnya menyoroti kejadian-kejadian bersifat nasional. </p>
                    <b>
                      <p>
                        Sejarah Lokal <br/>
                        
                      </p>
                    </b>
                    <p>Sejarah lokal merupakan kumpulan peristiwa yang terjadi pada lokasi yang kecil, desa atau kota kecil pada umumnya, tidak menarik perhatian karena tidak mempunyai dampak luas.</p>
                </ul>
            </div>
            <!--/col-->
            
        </div>
    </div>
</div>
    <!-- end side bar -->
    {{-- <section class="blog_section" >
      <div class="container"data-aos="fade-up" data-aos-delay="100" >
          <div class="blog_content">
              <h4 style="-webkit-text-fill-color: rgb(248, 109, 59)">List Bacaan</h4> <hr>
              <div class="owl-carousel owl-theme">
                  <div class="blog_item"data-aos="fade-up" data-aos-delay="100">
                      <div class="blog_image">
                          <img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/03/10/18/31/hong-kong-4046913_960_720.jpg" alt="images not found">
                          <span><i class="icon ion-md-create"></i></span>
                      </div>
                      <div class="blog_details">
                          <div class="blog_title">
                              <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                          </div>
                          <ul>
                              <li><i class="icon ion-md-person"></i>Alexa</li>
                              <li><i class="icon ion-md-calendar"></i>August 1, 2020</li>
                          </ul>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                          <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
                      </div>
                  </div>                        
                  <div class="blog_item"data-aos="fade-up" data-aos-delay="200">
                      <div class="blog_image">
                          <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_960_720.jpg" alt="images not found">
                          <span><i class="icon ion-md-create"></i></span>
                      </div>
                      <div class="blog_details">
                          <div class="blog_title">
                              <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                          </div>
                          <ul>
                              <li><i class="icon ion-md-person"></i>Alexa</li>
                              <li><i class="icon ion-md-calendar"></i>August 1, 2020</li>
                          </ul>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                          <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
                      </div>
                  </div>                        
                  <div class="blog_item"data-aos="fade-up" data-aos-delay="300">
                      <div class="blog_image">
                          <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" alt="images not found">
                          <span><i class="icon ion-md-create"></i></span>
                      </div>
                      <div class="blog_details">
                          <div class="blog_title">
                              <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                          </div>
                          <ul>
                              <li><i class="icon ion-md-person"></i>Alexa</li>
                              <li><i class="icon ion-md-calendar"></i>August 1, 2020</li>
                          </ul>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                          <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
    
   
    @endsection