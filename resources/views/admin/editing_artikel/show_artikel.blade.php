@extends('admin.top_buttoms')

@section('active')
<li><a href="/artikel">Kembali</a></li>  
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
              {{-- <h2 style="-webkit-text-fill-color: rgb(248, 109, 59)">PERTEMPURAN KARANG KEDAWUNG</h2> --}}
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
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
                          <h3 >{{$artikel->judul}}</h3>
                          <hr>
                        </div>
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">    “Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut. Oke, perlu kalian ketahui sebelum peristiwa Pertempuran Karang Kedawung, pasukan Brigade III/Damarwulan yang dipimpin oleh Sroedji melakukan wingate action. Apa wingate action itu? Dilansir dari laman Pusjarah TNI, wingate action adalah, “menempatkan kembali setiap pasukan ke asalnya, setelah melakukan hijrah ke luar daerah kekuasaan Belanda sebelum Perundingan Renville”. Pasca ditandatanganinya Perundingan Renville  pada tanggal 17 Januari 1948 ternyata memberikan dampak merugikan bagi Indonesia, salah satunya memicu munculnya Agresi Militer II Belanda.</p>
                          
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                        
                      </div>

                      {{-- batas paragraf --}}
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                        <br>
                        {{-- <img src="assets/img/soengkono.PNG" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://analisnews.co.id/2020/11/sungkono-pahlawan-perang-10-november-di-surabaya.html">analisnews.co.id</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                        
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">Agresi Militer Belanda II yang dimulai pada tanggal 19 Desember 1948 mendorong Jenderal Soedirman selaku Panglima Besar mengeluarkan Perintah Kilat Nomor I (Perintah Kilat No. 1/P.B/D/48) sebagai lanjutan dari Perintah Siasat Nomor I pada November 1948. Perintah tersebut ditujukan terhadap semua anggota APRI yang disampaikan oleh Kapten Soepardjo lewat RRI. Dikutip dari buku “Peran TNI-AU Pada Masa Pemerintahan Darurat Republik Indonesia Tahun 1948-1949” isi dari Perintah Kilat No. 1/P.B/D/48 yaitu.
                            <br/> 1.	Kita telah diserang
                            <br/> 2.	Pada tanggal 19 Desember 1948 Angkatan Perang Belanda menyerang kota Yogyakarta dan lapangan terbang Maguwo
                            <br/> 3.	Pemerintah Belanda telah membatalkan gencatan senjata
                            <br/> 4.	Semua Angkatan Perang menjalankan rencana yang telah ditetapkan untuk menghadapi Belanda. 
                            </p>
                        </div>
                      </div>
                      <!-- gambar -->
                      <div style="margin-left: 1rem" class="col-lg-12 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        <img  src="assets/img/gambar/1.jpg" class="img-fluid" alt="gambar" width="400">
                        <p style="margin-bottom: 0rem;text-indent: 0"><i>Pergerakan Tentara Belanda Menuju Yogyakarta </i></p>
                        <p style="text-indent: 0"> sumber: <i>Subdisjarah, 2001</i></p>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <!-- paragraf 3 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Kelanjutan dari surat perintah tersebut, Kolonel Soengkono selaku pemimpin Divisi I wilayah Jawa Timur memberikan perintah kepada para bawahannya untuk melakukan wingate action, salah satunya adalah pasukan Brigade III/Damarwulan. Pasukan tersebut dibawah pimpinan Letkol. Mochammad Sroedji. Mereka bersedia kembali ke wilayah Besuki sebagai tempat asal dari Brigade III. Wingate action yang dilaksanakan oleh Brigade III/Damarwulan ditempuh dengan jalan kaki (longmarch) dengan jarak diperkirakan 500 km melalui jalur Kediri – Besuki.  
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
                            Konsep awal dalam melaksanakan wingate action ditempuh melalui Lodoyo – Binangun – Bantur – Sumber Manjing dan melewati Tempursari – Gondoruso untuk sampai di Lumajang bagian selatan. Kemudian, struktur perjalanan setiap batalion dalam pasukan Brigade III/Damarwulan pada garda depan dilakukan oleh Batalion 26 (E.J. Magenda), selanjutnya diikuti oleh Batalion 25 (Mayor Syafioeddin), staf Brigade III, dan pada barisan terakhir adalah batalion 27 (Mayor Seodarmin) serta Batalion Depot (Mayor Darsan Iroe). 
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>

                      {{-- batas paragraf --}}
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                        <br>
                        {{-- <img src="assets/img/soengkono.PNG" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://analisnews.co.id/2020/11/sungkono-pahlawan-perang-10-november-di-surabaya.html">analisnews.co.id</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                        
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Lantas selama melakukan wingate action apakah mereka menghadapi rintangan? Tentu saja! Perjuangan tidak dapat dikerjakan secara instan. Produk yang mengklaim dapat diolah secara instan masih butuh proses, contohnya mie instan.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Oke Lanjut! Adapun rintangan yang dihadapi pasukan Brigade III/Damarwulan seperti medan perjalanan yang sulit, adanya sebagian anggota keluarga pasukan yang ikut, dan kurangnya persediaan logistik. Bahkan beban besar yang dihadapi pasukan mereka adalah adanya mata-mata dari Belanda untuk mengawasi pergerakan Brigade III. Keterlibatan Belanda dalam pergerakan pasukan Brigade III/Damarwulan menyebabkan strategi yang telah direncanakan untuk setiap batalion menjadi tidak sesuai. Terlebih, dalam membuka jalur untuk melakukan wingate action mau tidak mau mereka harus berhadapan pasukan Belanda. 
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <!-- paragraf 4 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Loh kok bisa? Nah, dikutip dari Buku Sejarah Nasional Indonesia Jilid 6 dikatakan jika “Belanda terpaksa memperbanyak pos-pos disepanjang jalan yang menghubungkan kota-kota yang sudah mereka duduki”. Alasan Belanda melakukan hal tersebut karena, selain pasukan TNI melakukan wingate action, mereka juga diperintahkan untuk melaksanakan wehrkreise (mendirikan daerah pertahanan). Maka dari itu, selama melakukan wingate action pasukan Brigade III/Damarwulan berjumpa dan berperang dengan Belanda dibeberapa lokasi. Adapun lokasi-lokasi yang dimaksud yaitu.
                             <br/> 1.	Lidoyo, Brigade III/Damarwulan
                             <br/> 2.	Tempursari. Batalion yang bertugas pada pertempuran di Tempusari adalah Batalion 26 dan Batalion 27. Tujuan mereka menyerang pasukan Belanda di Tempusari untuk membuka jalan.
                             <br/> 3.	Jarit (wilayah yang berlokasikan di bagian selatan Pasirian). Tujuan penyerangan yang dilakukan oleh Batalion 25 di Desa Jarit adalah untuk menumpas markas Belanda di Candipuro.
                             <br/> 4.	Karanglodi, pertempuran antara Batalion 27 dengan Belanda.
                             <br/> 5.	Gayasan dan Curahcabe. 
                             <br/> Perlu kalian ketahui. Sebelum pasukan Brigade III/Damarwulan menginjakkan kakinya di Desa Bodong dan melakukan penyerangan di Desa Jarit oleh Batalion 25, mereka singgah di Desa Penanggal, yang kemudian dijadikan sebagai rendezvous point pasukan mereka. 

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
                          <p style="margin-bottom: 0rem" class="description">
                            Apa itu rendezvous point? Dikutip dari Peraturan Direktur Jenderal Perhubungan Udara Nomor : Kp 90 Tahun 2016, rendezvous point adalah “suatu tempat bertemunya para bantuan termasuk kendaraan, untuk kepentingan penanggulangan keadaan darurat di bandar udara, pada titik pertemuan tersebut, para bantuan akan menerima pengarahan untuk menuju staging area”. 
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>

                      {{-- batas paragraf --}}
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                        <br>
                        {{-- <img src="assets/img/soengkono.PNG" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://analisnews.co.id/2020/11/sungkono-pahlawan-perang-10-november-di-surabaya.html">analisnews.co.id</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                        
                      </div>
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Nah, maka alasan pasukan Brigade III/Damarwulan menjadikan Desa Penanggal sebagai rendezvous point karena kondisi di Desa Penanggal dikatakan cukup makmur dan masyarakatnya menyatakan berbakti terhadap Republik, sehingga pasukan Brigade III mendapatkan suguhan makanan dan tambahan logistik dari  masyarakat. Sementara itu, pasukan yang tiba lebih awal di Desa Penanggal yaitu staf Brigade III, sedangkan posisi Batalion 25 di kawasan hutan Semeru selatan, Batalion 26 beserta Batalion 27 sedang berhenti sejenak di Sumbertangkil.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Kemudian selama melakukan wingate action, apakah mereka menyusun strategi lagi? Jawaban adalah “iya”. Sebagai kelanjutan dari Surat Perintah Siasat No.1, komadan Brigade III/Damar Wulan yaitu  Sroedji mulai menyusun startegi dan melakukan alokasi penugasan. Adapun pembagiannya yaitu 
                            <br/> 1.	Komandan sub-teritorium Besuki dan segenap operasi yang mencakup wilayah Jember-Banyuwangi dibawah pengawasan Letkol. Mochammad Sroedji 
                            <br/> 2.	Komandan sub-teritorium Besuki dan segenap operasi yang mencakup wilayah Situbondo-Bondowoso dibawah pengawasan wakil komandan Brigade III yaitu Mayor Imam Soekarto 
                            <br/> 3.	Letkol. dr. Soebandi diangkat sebagai Residen Militer dan bergabung dengan Mayor Imam Soekarto
                            <br/> 4.	Pembubaran terhadap Batalion Depot dan para anggotanya dialokasikan ke setiap batalion yang ada. Tujuannya adalah untuk memperkuat setiap batalion, dan dari ketiga batalion diberikan tugas sebagai pertahanan rakyat.

                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>
                      <!-- paragraf 4 -->
                      <div class="col-lg-2 video-box"data-aos="fade-up" data-aos-delay="300">
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Langkah selanjutnya adalah setiap komandan diperintahkan mendirikan wehrkreise. Apa itu wehrkreise? Menurut Swastika Niken Pratiwi wehrkreise adalah “pelaksanaan strategi dalam bidang militer yang membutuhkan perang gerilya dan melibatkan penduduk sipil yang dibagi menjadi beberapa bagian pada setiap wilayahnya”. 
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
                       
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <br>
                          <p style="margin-bottom: 0rem" class="description">
                            Pada masing-masing onder distrik dan desa mulai menunjuk pejabat teritorial, dengan demikian secara bertahap dapat mengukuhkan kedaulatan RI secara de facto. Masing-masing dari wehrkreise, pasukan batalion beserta rakyat kelak akan melakukan penyerbuan secara gerilya terhadap pasukan Belanda. Sasaran utama dalam bidang politik yaitu seluruh bawahan Belanda, dan bidang ekonomi yaitu dengan menghancurkan perusahaan kopi beserta tembakau milik pihak asing. Namun perjuangan tersebut mengalami hambatan ketika sesampainya di Desa Karang Kedawung, yang dianggap sebagai puncak dari wingate action pasukan Brigade III/Damarwulan. 
                          </p>
                        </div>
                        
                      </div>
                      <div class="col-lg-2 video-box" data-aos="fade-up" data-aos-delay="200">
                        <br>
                        {{-- <img src="assets/img/agresi2.jpg" class="img-fluid" alt="gambar" width="400">
                        <p><i>Sumber: <a href="https://www.tribunnewswiki.com/2019/08/06/agresi-militer-belanda-ii">www.tribunnewswiki.com</a></i></p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                      </div>

                      {{-- batas paragraf --}}
                      
                      <!-- paragraf 2 -->
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="margin-bottom: 0rem" class="description">
                            Lalu, bagaimana perjuangan mereka dalam Pertempuran Karang Kedawung? Yuk baca artikel selanjutnya dengan klik link dibawah ini.
                          </p>
                          <a href="/tabloid2">Lihat, Berperang Melawan Belanda di Karang Kedawung Pasca Kemerdekaan </a>
                        </div>
                      </div>
                      <div class="col-lg-10 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 3 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          <p style="text-indent: 0in;" style="margin-bottom: 0rem" class="description">
                            <b><span>Sumber:</span> </b>
                            <br/> - Peraturan Direktur Jenderal Perhubungan Udara Nomor : Kp 90 Tahun 2016. 
                            <br/> - Poesponegoro, Marwati Djoened, dan Nugroho. 2011. <i> Sejarah Nasional Indonesia Jilid VI Zaman Jepang dan Zaman Republik.</i> Kelima. Jakarta: Balai Pustaka.
                            <br/> - Pratiwi, Swastika Niken. 2016. <i>“The Role of Sub Wehrkreise 101 Yogyakarta in Indonesia Second War of Independence (1948-1949)”.</i> Diambil 21 Februari 2022  ( <a href="https://adoc.pub/abstract-the-role-of-sub-wehrkreise-101-yogyakarta-in-indone.html" target="_blank"> https://adoc.pub/abstract-the-role-of-sub-wehrkreise-101-yogyakarta-in-indone.html</a> ).
                            <br/> - Pusjarah TNI. 2017. “Serangan Umum Terhadap Kota Blitar.” <i> Pusat Sejarah Tentara Nasional Indonesia.</i> Diambil 11 Januari 2022 ( <a href="https://sejarah-tni.mil.id/2017/10/26/serangan-umum-terhadap-kota-blitar/#:~:text=Pada tanggal 19 Desember 1948 Belanda kembali melancarkan agresi militer.&text=Selain itu%2C dalam menghadapi agresi,daerah pendudukan Belanda sebelum Renvile." target="_blank">https://sejarah-tni.mil.id/2017/10/26/serangan-umum-terhadap-kota-blitar/#:~:text=Pada tanggal 19 Desember 1948 Belanda kembali melancarkan agresi militer.&text=Selain itu%2C dalam menghadapi agresi,daerah pendudukan Belanda sebelum Renvile.</a> ).
                            <br/> - Subdisjarah. 2001.<i> Peran TNI-AU Pada Masa Pemerintahan Darurat Republik Indonesia Tahun 1948 - 1949.</i> Jakarta: Subdisjarah.
                            <br/> - Widuatie, Ratna Endang. 2017. <i>“Karang kedawung 1949: Gugurnya Letnan Kolonel Mochammad Sroedji.”</i> Patrawidya 18(2):237–51.

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
                <h4 class="sidebar-title">Bacaan Lain</h4> 
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/gambar/1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a>1. Sebelum Pertempuran Karang Kedawung, Pasukan Brigade III/Damarwulan...</a></h5>1 Maret 2022
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
                            <h5 class="mt-0 mb-1"><a href="/tabloid3">3. Yuk Uji Pemahaman Kalian Tentang Pertempuran Karang Kedawung</a></h5> 1 Maret 2022
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