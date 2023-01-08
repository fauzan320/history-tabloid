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
        <div style="p{text-indent:0}" class="col-md-9 mb40">
          <!-- ======= artikel Section ======= -->
          <section id="about" class="about">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
              <h2 style="-webkit-text-fill-color: rgb(248, 109, 59)">PERTEMPURAN KARANG KEDAWUNG</h2>
              <!-- {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}} -->
            </div>
            <!-- carousel -->
            <div class="container">
              <div id="carouselExampleCaptions" class="carousel slide" data-interval="0" data-ride="carousel">
                
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <!-- Halaman 1 -->
                    <div class="row no-gutters">
                      
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <br>
                        <div class="section-title text text-left" data-aos="fade-up" data-aos-delay="100">
                          <br>
                          <h3 >PERTEMPURAN KARANG KEDAWUNG TAHUN 1949</h3>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent: 0" class="description"> 
                          Merdeka, satu kata yang umumnya kita pahami dengan arti kebebasan. Proklamasi yang dikumandangkan oleh Ir.Soekarno pada tanggal 17 Agustus 1945 menandakan Indonesia telah merdeka, bebas dari penjajahan. Namun, setelah itu bukan berarti Indonesia benar-benar bebas dari ancaman pihak luar. Dalam buku Sejarah Nasional Indonesia Jilid 6 disebutkan, “Setelah proklamasi kemerdekaan, kedatangan pasukan sekutu terdapat serdadu Belanda dan NICA ( <i>Netherlands Indies Civil Administration</i> ) yang secara terang-terangan bertujuan mendirikan pemerintah Hindia-Belanda”. Ancaman tersebut tentunya tidak ditanggapi secara “santai” oleh bangsa kita. Maka dari itu jalan yang ditempuh adalah menyikapinya dengan cara diplomasi dan perang.
                          </p>
                          
                        </div>
                        
                      </div>
                      <!-- <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                        
                      </div> -->

                      {{-- batas paragraf --}}
                      
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem;text-indent:0" class="description">
                          Umumnya perang yang kita kenal pasca kemerdekaan diantaranya, Pertempuran Surabaya (10 September 1945), Pertempuran Ambarawa (20 November-15 Desember 1945), Pertempuran Medan Area (13 Oktober 1945-10 Agustus 1946), Bandung Lautan Api (23 Maret 1946). Namun tahukah kalian? Di Kabupaten Jember juga terdapat sebuah pertempuran bersejarah melawan Belanda, bahkan tokoh utamanya termasuk ikonik Kabupaten Jember. Nama perang tersebut dikenal dengan nama Pertempuran Karang Kedawung.
                          </p>
                        </div>
                      </div>
                      
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem; text-indent:0" class="description">
                          Lokasi pertempuran terjadi di Desa Karang Kedawung, Kecamatan Mumbulsari, Kabupaten Jember. Peristiwa tersebut masih berkaitan dengan Agresi Militer Belanda II. Saat terjadi ageresi Panglima Besar Jenderal Soedirman memerintahkan jajarannya untuk melaksanakan Perintah Kilat Nomor 1 yang disampaikan pada tanggal 19 Desember 1948. Selanjutnya, Kolonel Soengkono, selaku pemimpin Divisi I Jawa Timur Brigade III/Damarwulan yang dipimpin oleh Letkol. Mochammad Sroedji melaksanakan wingate (penyusupan) ke Besuki. Jalur yang mereka lalui dari Kediri hingga Besuki dengan jarak kurang kebih 500 km selama 51 hari. 
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
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
                            <a data-target="#carouselExampleCaptions" data-slide-to="1" ><button style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up"> Next</button></a>
                            
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
                          Pasukan Brigade III tiba di Desa Karang Kedawung pada tanggal 7 Februari 1949. Keesokan harinya, pada tanggal 8 Februari 1949 Sroedji memberikan perintah kepada pasukan kawal brigade melakukan pengaturan pengamanan dan penempatan para pasukan untuk diarahkan pada lokasi ketinggian yang dianggap strategis. Namun perlu kalian ketahui, ternyata keberadaan Brigade III telah diketahui oleh Belanda. Letkol J. H .J. Brendgen selaku pemimpin Batalyon Infanteri XIII KNIL telah melakukan pengepungan di Desa Karang Kedawung. Di saat pasukan Brigade III menuju lokasi ketinggian yang telah direncanakan, tiba-tiba mereka diserang musuh. Kedatangan musuh berasal dari Kebun Lengkong, Desa Mumbulsari. Dengan penyerangan yang dilakukan oleh pasukan Belanda tersebut menandakan dimulainya Pertempuran Karang Kedawung. Pasukan Brigade III dengan semangat dan tekad yang kuat berjuang melawan pasukan Belanda.
                          </p>
                        </div>
                        
                      </div>
                      <!-- <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div> -->

                      {{-- batas paragraf --}}
                      
                      
                      <!-- gambar -->
                      <div style="text-align: center" class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/1b.jpg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Monumen Bambu Runcing di Desa Karang Kedawung, Kecamatan Mumbulsari, Kabupaten Jember.  </i></p>
                        <p style="text-indent: 0"> sumber: Kartomiharjo, Saptono, dan Soekarsono, 1986 </i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                        
                      <!-- </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div> -->
                      <!-- paragraf 2 -->
                     
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Pertempuran tersebut berlangsung secara genting. Disaat pertempuran masih berlangsung Sroedji tertembak pada dada dibagian kiri. Tidak tinggal diam, dr. Soebandi sebagai rekan seperjuangannya segera menolong Sroedji untuk diamankan di parit. Namun, disaat menyelamatkan Sroedji dr. Soebandi tertembak sehingga mengakibatkan beliau gugur. Kendati demikian, Sroedji dengan kondisi terluka tetap gigih melawan pasukan Belanda. Perjuangan Sroedji berakhir beliau ditembak dari pasukan musuh dan gugur ditempat. 
                          </p>
                        </div>
                      </div>
                      <!-- gambar -->
                      <div style="text-align: center" class="col-lg-10 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/2b.jpg" class="img-fluid" alt="gambar" width="300">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Patung Letkol. Sroedji dan dr. Soebandi di Jalan Gajah Mada, Kabupaten Jember  </i></p>
                        <p style="text-indent: 0"> sumber: Dokumentasi Pribadi</p>
                      </div>

                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a>
                          <hr>
                          <h2>2</h2>
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a data-target="#carouselExampleCaptions" data-slide-to="0"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                            <a data-target="#carouselExampleCaptions" data-slide-to="2"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Next</button></a>
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
                          <p style="margin-bottom: 0rem" class="description">
                          Di hari yang sama, jenazah Sroedji diamankan oleh pasukan Belanda dan dibawa menggunakan truk pasukan mereka ke Jember dengan pengawalan ketat. Mereka membawa jenazah Sroedji ke markas Belanda yang berlokasikan dibagian timur alun-alun, tepatnya Hotel Djember (saat ini adalah Bank Republik Indonesia). Mengetahui kabar tersebut, Kiai Dachnan selaku tokoh masyarakat dari Kreongan bermaksud menyelamatkan jenazah Sroedji dan melakukan pemakaman secara terhormat. Setelah mendapat persetujuan dari Belanda, pada tanggal 9 Februari 1949 jenazah Sroedji dibawa oleh Kiai Dachnan dengan diiringi delapan personil tentara Belanda menggunakan truk militer untuk dimakamkan.
                          </p>
                        </div>
                        
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Lantas, apakah dengan gugurnya sang pemimpin pasukan Brigade III/Damarwulan perjuangan mereka langsung terhenti? Jawabannya tidak. Dengan bekal tekad yang kuat, pasukan Brigade III/Damarwulan tetap melanjutkan perjuangan sesuai rencana awal menuju ke Besuki beserta anggota pasukan yang masih tersisa. Komandan Brigade III/Damarwulan diganti oleh Mayor Imam Soekarto.
                          </p>
                        </div>
                      </div>
                      <!-- paragraf 3 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Namun, sangat disayangkan setelah gugurnya komandan Brigade III di Karang Kedawung terdapat beberapa oknum yang bekerja sama dengan Belanda diantaranya Kapten Bintoro dan Mayor Abdul Rifa’i (menyerah kepada Belanda tanggal 25 Juni 1949). Mereka menyarankan agar sisa pasukan yang tersisa untuk menyerah. Tidak tinggal diam sekaligus sebagai bentuk serangan balasan, Batalyon 26 melakukan <i>raid</i> (menyerbu) Bondowoso disaat Mayor Abdul Rifa’i dan Sersan Mayor Loth saat melakukan rapat umum pada tanggal 30 Juni 1949. 
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 4 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Brigade III/Damarwulan selama melakukan <i>wingate</i> hingga berperang secara gerilya tidak lupa dibantu oleh rakyat sipil. Bahkan A. H. Nasution berkata, “ <i>Selama rakyat selalu bersama melakukan pergerakan dengan brigade, maka disaat itu pula brigade dapat melakukan tugasnya</i> ”. Maka dari itu perlawanan terhadap Belanda tetap dilakukan bersama rakyat hingga penyerahan Yogyakarta kepada RI dan dibebaskannya Sukarno beserta Mohammad Hatta pada Juli 1949. 
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 5 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                          Atas segala jasa bangsa dan negara, Letkol inf. (Anumerta) Mochammad Sroedji dijadikan sebagai Bintang Mahaputera pada masa pemerintahan Presiden Joko Widodo yang telah tertera dalam Keppres RI No. 91/TK/Tahun 2016 pada tanggal 3 November 2016.    
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
                            <a data-target="#carouselExampleCaptions" data-slide-to="1"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                            <a data-target="#carouselExampleCaptions" data-slide-to="3"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Next</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

                  <div class="carousel-item ">
                    <!--halaman 4 -->
                    <div class="row no-gutters">
                      <!-- paragraf 1 -->
                       
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="text-indent: 0in;text-indent: 0" style="margin-bottom: 0rem" class="description">
                          <b><span>Referensi :</span> </b>
                            <br>
                            <b><span>Buku :</span> </b>
                            <br/> - Cribb, R., & Kahin, A. 2012. <i>Kamus Sejarah Indonesia.</i> Depok: Komunitas Bambu.
                            <br/> - Huda, A. I., & Hudi, S. 2012. <i>Pahlawan Jember</i> (E. N. Tjendani, Ed.). Jember: UIJ Kyai Mojo.
                            <br/> - Jupriono, Ahmad, Z., & Purbandiyo, D. 2018. <i>Sekilas Wakil Rakyat dan Perkembangan Kabupaten Jember (Prasejarah s.d 1970-an).</i> Jember: Sekretariat DPRD Kabupaten Jember.
                            <br/> - Nasution, A. H. (1979). <i>Sekitar Perang Kemerdekaan Indonesia Jilid 10.</i> Bandung: Disjarah AD dan Penerbit Angkasa.
                            <br/> - Poesponegoro, M. D., & Nugroho, N. (Ed.). 2010. <i>Sejarah Nasional Indonesia, Zaman Jepang dan Zaman Republik.</i> Jakarta: Balai Pustaka.
                            <br>
                            <br>
                            <b><span>Artikel :</span> </b>
                            <br/> - Widuatie, R. E. 2017. Karang kedawung 1949: Gugurnya Letnan Kolonel Mochammad Sroedji. <i>Patrawidya, 18</i>(2), 237–251.
                            
                          </p>
                        </div>
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
                        <i class='fa fa-arrow-circle-left' style='color: orange'></i>
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