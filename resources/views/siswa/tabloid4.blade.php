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
                          <h3 >MENGENAL LEBIH DEKAT KOMANDAN BRIGADE III/DAMARWULAN, LETKOL. SROEDJI</h3>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        {{-- <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">    “Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut. Oke, perlu kalian ketahui sebelum peristiwa Pertempuran Karang Kedawung, pasukan Brigade III/Damarwulan yang dipimpin oleh Sroedji melakukan wingate action. Apa wingate action itu? Dilansir dari laman Pusjarah TNI, wingate action adalah, “menempatkan kembali setiap pasukan ke asalnya, setelah melakukan hijrah ke luar daerah kekuasaan Belanda sebelum Perundingan Renville”. Pasca ditandatanganinya Perundingan Renville  pada tanggal 17 Januari 1948 ternyata memberikan dampak merugikan bagi Indonesia, salah satunya memicu munculnya Agresi Militer II Belanda.</p>
                          
                        </div> --}}
                        
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center " class="col-lg-10 video-box about-content" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/seruji2.jpeg" class="img-fluid" alt="gambar" width="300">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Letkol. Mochammad Sroedji </i></p>
                        <p style="text-indent: 0"> sumber: <i>Historia.id</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Jika kalian pernah melewati kantor bupati Kabupaten Jember pasti melihat patung besar didepannya. Nama tokoh pada patung tersebut adalah Mochammad Sroedji. Beliau merupakan salah satu tokoh pahlawan yang gugur dalam Pertempuran Karang Kedawung 1949. </p>
                          
                        </div>
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">Mengenal lebih dekat dengan Sroedji. Beliau anak kedua dari tujuh bersaudara pasangan H. Hasan dan Hj Amna. Lahir di Bangkalan pada tanggal 1 Februari 1915.  Istri Sroedji bernama Roekmini, dan dari pernikahannya dikaruniai empat anak yang bernama Sutjahjo, Supomo, Sudi Astuti, dan Pudji Redjeki Irawati. 
                            </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 3 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Selama masa hidupnya sebelum berkarir dibidang militer, Sroedji menempuh beberapa jenjang pendidikan. Pertama beliau sekolah di HIS (Hollandsch-Inlandsche School) di Karesidenan Kediri. Selanjutnya, Sroedji bersekolah di Ambacht Leergang Malang, yaitu sekolah pendidikan teknik pertukangan. Tidak hanya itu, Sroedji tercatat pernah mengambil sekolah Pemberantasan Malaria. Dari sekolah itulah yang mengantarkan Sroedji datang ke Jember dan bekerja sebagai Mantri Malaria di Gozondheids Kantoor (Djawatan Kesehatan Rakyat). Saat ini Djawatan Kesehatan Rakyat dikenal dengan nama Rumah Sakit Paru yang lokasinya berada di Desa Kreongan, Kecamatan Patrang, Kabupaten Jember. 
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
                            MEMULAI KARIR MILITER
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
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Sroedji mulai terjun ke bidang militer ketika bersekolah di Peta (Pembela Tanah Air) Bogor untuk calon chudancho (komandan kompi), dan bergabung di Kompi I dibawah arahan Letnan. Nomura Shohichi. Setelah tuntas bersekolah disana, Sroedji ditugaskan di Daidan II Besuki untuk wilayah Jember – Banyuwangi dengan pangkat chudancho.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Setelah Proklamasi Kemerdekaan, Sroedji bergabung dalam Resimen II/BKR berpangkat mayor. Ketika BKR berganti nama TKR, secara otomatis Resimen II/BKR beralih menjadi Resimen IV/TKR Divisi VIII. Adapun peranan batalyon Sroedji selama itu adalah ikut serta mempertahankan front bagian tengah Sidoarjo saat pihak Sekutu memberikan ultimatum pada tanggal 9 November 1945. Dari insiden tersebut keesokan harinya meletus sebuah pertempuran di Surabaya yang dikenal dengan Pertempuran 10 November.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 4 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Saat Agresi Militer I Belanda mulai beraksi, Sroedji yang berperan sebagai komandan Resimen 39/Menak Koncar dan beralih menjadi komandan COG III (Commando Offensive Guerilla) untuk mempertahankan wilayah Karesidenan Besuki dari serangan Belanda. 
                          </p>
                        </div>
                      </div>
                      
                      
                      <!-- paragraf 5 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Agresi Militer I Belanda berakhir melalui Perundingan Renville. Dampak dari perundingan tersebut menyebabkan setiap pasukan TNI untuk melakukan hijrah ke wilayah Republik, termasuk pasukan Sroedji yang melakukan hijrah ke Blitar. Di sisi lain, dampak dari Perundingan Renville menyebabkan jatuhnya Kabinet Amir Sjariffudin dan digantikan dengan Kabinet Hatta. Semasa kabinet Hatta, kebijakan terkenal yang diberlakukannya adalah melakukan Rasionalisasi dan Reorganisasi (Rera) pada TNI.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 6 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Secara otomatis, Sroedji yang awalnya menjabat sebagai komandan Resimen 39/Menak Koncar beralih menjadi komandan Resimen 40/Damarwulan. Namun, ketika penyempurnaan program Rera belum berjalan maksimal terjadi pemberontakkan PKI Madiun tanggal 18 September 1948.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 7 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Selama penumpasan gerakan PKI Madiun, Resimen 40/Damarwulan saat itu beralih menjadi Brigade Mobile Damarwulan dengan komandan tetapnya, Sroedji. Tugas dari pasukan tersebut untuk menumpas pergerakan PKI Madiun di Blitar. Maka dari itu, agar proses penuntasan dan pembersihan PKI Madiun di Blitar berjalan maksimal, Sroedji diangkat sebagai komandan brigade SGAP (Staf Gabungan Angkatan Perang) disamping menjabat komandan Brigade Mobile Damarwulan.
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
                            Setelah gerakan PKI Madiun dinilai benar-benar berakhir, program Rera yang sempat tertunda kembali dilanjutkan. Hingga akhirnya diputuskan Brigade Mobile Damarwulan beralih menjadi Brigade III/Damarwulan Divisi I Jawa Timur dengan komandan brigade III, Letkol. Sroedji. Markas Brigade III/Damarwulan berlokasikan di Blitar. 
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
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Saat Agresi II Belanda, Brigade III/Damarwulan bersama segenap batalyonnya melakukan gerakan wingate action kembali ke Besuki. Namun, sayangnya ketika para staf Brigade III tiba di Desa Karang Kedawung, terjadi pertempuran dengan tentara KNIL.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            GUGUR DI PERTEMPURAN KARANG KEDAWUNG
                          </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 4 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Pertempuran Karang Kedawung yang berlangsung pada tanggal 8 Februari 1949 menyebabkan gugurnya Sroedji akibat tertembak. Gugurnya komandan Brigade III tersebut dimanfaatkan oleh Belanda sebagai media propaganda untuk menghancurkan mental pasukan lainnya yang masih tersisa. Jenazah Sroedji diletakkan di ruang terbuka oleh Belanda di pelataran Hotel Djember. 
                          </p>
                        </div>
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center " class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/seruji.jpeg" class="img-fluid" alt="gambar" width="300">
                        <p style="margin-bottom: 0rem;"><i>Monumen Letkol. Mochammad Sroedji di Depan Kantor Bupati Jember</i></p>
                        <p style="text-indent: 0"> sumber: <i>Dokumentasi Pribadi</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description">
                            Melihat kondisi tersebut, salah satu tokoh dari Kreongan bernama Kiai Dachnan menyelamatkan jenazah Sroedji pada tanggal 9 Februari 1949. Setelah melalui diskusi panjang dengan Belanda, Kiai Dachan berhasil membawa jenazah Sroedji untuk dimakamkan secara terhormat di TPU Kreongan. Atas jasanya Sroedji dinobatkan sebagai Bintang Mahaputera pada tanggal 3 November 2016 yang tertera dalam Keppres RI No. 91/TK/Tahun 2016 semasa pemerintahan Presiden Joko Widodo.
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
                            <a data-target="#carouselExampleCaptions" data-slide-to="3"><button   style="background-color:#ff4500; border-color:orangered " class="btn btn-primary scroll-up">Next</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item ">
                    <!--halaman 4 -->
                    <div class="row no-gutters">
                      
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <br>
                          <p style="text-indent: 0in;text-indent: 0" style="margin-bottom: 0rem" class="description">
                            <b><span>Referensi :</span> </b>
                            <br/> - Dinas Sejarah TNI AD. 1982. Sejarah TNI-AD 1945-1973. Bandung: Dinas Sejarah TNI AD.
                            <br/> - Hakim, R. Z. 2020. Durahem. Yogyakarta: Pinggir.
                            <br/> - Huda, Afton Ilman, dan Saman Hudi. 2012. Pahlawan Jember. edited by E. N. Tjendani. Jember: UIJ Kyai Mojo.
                            <br/> - Penerangan Angkatan Darat. 1957. “Menembus Gunung Semeru.” Penerangan Angkatan Darat, Juli.
                            <br/> - Poesponegoro, Marwati Djoened, dan Notosusanto Nugroho, eds. 2010. Sejarah Nasional Indonesia, Zaman Jepang dan Zaman Republik. Jakarta: Balai Pustaka.
                            <br/> - Semdam VIII/Brawidjadja. 1968. Sam Karya Bhirawa Anoraga, Sejarah Militer Kodam VIII/Brawijaya. Malang: Semdam VIII/Brawidjadja.
                            <br/> - Widuatie, Ratna Endang. 2017. “Karang Kedawung 1949: Gugurnya Letnan Kolonel Mochammad Sroedji.” <i> Patrawidya 18</i>(2):237–51.

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
                          <h2>4</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a data-target="#carouselExampleCaptions" data-slide-to="2"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                            
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