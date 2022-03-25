@extends('layouts.top_buttom')

@section('active')
<li class="active" ><a  style="-webkit-text-fill-color: rgb(248, 109, 59)" href="#">Uji Pemahaman</a></li> 
@endsection
@section('isi')

@section('link')
<link href="css/dropdown.css" rel="stylesheet" type="text/css">
@endsection
  
    <!-- side bar -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
          <form class="form-register" action="{{route('post')}}" method="post">
            @csrf
          <!-- ======= artikel Section ======= -->
          <section id="about" class="about">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
              <h2 style="-webkit-text-fill-color: rgb(248, 109, 59)">Uji Pemahaman Siswa</h2>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
            <!-- carousel -->
            <div class="container">
              <div id="carouselExampleCaptions" class="carousel slide" data-interval="0" data-ride="carousel">
                
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <!-- Halaman 1 -->
                    <div class="row no-gutters">
                      
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content ">
                        <br>
                        <div class="section-title text text-left text text-center" data-aos="fade-up" data-aos-delay="100">
                          <br>
                          <h3 >Uji Pemahaman Siswa Terkait <br> Sejarah Lokal Pertempuran Karang Kedawung</h3>
                          <hr>
                          {{-- <p style="text-indent: 0" >Pilihlah Salah Satu Jawaban Pada Pertanyaan Dibawah Ini Dengan Tepat!  </p> --}}
                        </div>
                        <!-- paragraf 1 -->
                        <div class="text-justify text text-center" data-aos="fade-up" data-aos-delay="200">
                          {{-- <p style="margin-bottom: 0rem" class="description">   afif dari aingdekeh</p> --}}
                          <p style="text-indent: 0%" class="description">Kerjakan secara pribadi, agar penilaian yang dilakukan, berdasarkan pemahaman kalian terhadap
                            artikel yang sudah kamu baca, bisa maksimal. </p> 
                            <p style="text-indent: 0%" class="description"> <b>Selamat Mengerjakan ! </b> </p>
                            <p style="text-indent: 0%" class="description">Tekan <b>Kerjakan</b>  untuk memulai, atau tekan <a href="/tabloid3">Kembali</a> untuk meninggalkan soal.</p>
                          
                        </div>
                        
                      </div>
                      
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right "  data-aos="fade-up" data-aos-delay="200">
                          {{-- <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a> --}}
                          <hr>
                          {{-- <h2>1</h2> --}}
                          <div class="text text-center mt-4"data-aos="fade-up" data-aos-delay="200">
                            {{-- <a href="/tabloid"><button style="background-color:orangered; border-color:orangered " class="btn btn-primary">Prev</button></a> --}}
                            {{-- <a class="back-to-top" style="background-color:orangered; border-color:orangered"></a> --}}
                            <a href="/tabloid3" ><button   style="padding: 10px 150px ; background-color:rgb(122, 122, 122); border-color:rgb(122, 122, 122) " class="btn btn-primary scroll-up"> Kembali</button></a>
                            <a data-target="#carouselExampleCaptions" data-slide-to="1" ><button   style="padding: 10px 150px ; background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up"> Kerjakan</button></a>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  @foreach ($soal as $soal)
                  @php
                      
                    $prev =($soal->id - 1);
                    $next =($soal->id + 1);
                  @endphp
                    
                  <div class="carousel-item">
                    <!--halaman isi -->
                    <div class="row no-gutters">
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        {{-- <nav style="text-align: right" class="nav-menu float-right d-none d-lg-block">
                          <ul>
                            <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Soal
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a  class="dropdown-item" href="">1</a>
                                <a  class="dropdown-item" href="">2</a>
                              </div>
                            </li>
                          </ul>
                        </nav> --}}
                        <div class="dropdown">
                          <button style=" min-width: 50px; float: left; background-color: #ff4500; border-color: #ff4500" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Soal
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div style="display:inline;
                            float: left;
                            position: relative;
                            margin-left: 5px;
                            margin-right: 5px;
                            width:60px;">
                              <a data-target="#carouselExampleCaptions" data-slide-to="1"><button class="dropdown-item" type="button">1</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="2"><button class="dropdown-item" type="button">2</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="3"><button class="dropdown-item" type="button">3</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="4"><button class="dropdown-item" type="button">4</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="5"><button class="dropdown-item" type="button">5</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="6"><button class="dropdown-item" type="button">6</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="7"><button class="dropdown-item" type="button">7</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="8"><button class="dropdown-item" type="button">8</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="9"><button class="dropdown-item" type="button">9</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="10"><button class="dropdown-item" type="button">10</button></a>
                            </div>
                            <div style="display:inline;
                            float: left;
                            position: relative;
                            margin-left: 5px;
                            margin-right: 5px;
                            width:60px;">
                              <a data-target="#carouselExampleCaptions" data-slide-to="11"><button class="dropdown-item" type="button">11</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="12"><button class="dropdown-item" type="button">12</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="13"><button class="dropdown-item" type="button">13</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="14"><button class="dropdown-item" type="button">14</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="15"><button class="dropdown-item" type="button">15</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="16"><button class="dropdown-item" type="button">16</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="17"><button class="dropdown-item" type="button">17</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="18"><button class="dropdown-item" type="button">18</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="19"><button class="dropdown-item" type="button">19</button></a>
                              <a data-target="#carouselExampleCaptions" data-slide-to="20"><button class="dropdown-item" type="button">20</button></a>
                            </div>
                            
                          </div>
                        </div>
                       
                        <br>
                        @if ($soal->id==1)
                        <div class="section-title text text-left" data-aos="fade-up" data-aos-delay="100">
                          <br>
                            <h3 >Uji Pemahaman Siswa Terkait Sejarah Lokal Pertempuran Karang Kedawung</h3>
                            <hr>
                            <p style="text-indent: 0" >Pilihlah Salah Satu Jawaban Pada Pertanyaan Dibawah Ini Dengan Tepat!  </p>
                        </div>
                        @else 
                        
                        @endif
                        <!-- paragraf 1 -->
                        <div class="text-justify" data-aos="fade-up" data-aos-delay="200">
                          {{-- <p style="margin-bottom: 0rem" class="description">    “Wingate action”, mungkin beberapa diantara kalian masih belum familiar dengan istilah tersebut. Oke, perlu kalian ketahui sebelum peristiwa Pertempuran Karang Kedawung, pasukan Brigade III/Damarwulan yang dipimpin oleh Sroedji melakukan wingate action. Apa wingate action itu? Dilansir dari laman Pusjarah TNI, wingate action adalah, “menempatkan kembali setiap pasukan ke asalnya, setelah melakukan hijrah ke luar daerah kekuasaan Belanda sebelum Perundingan Renville”. Pasca ditandatanganinya Perundingan Renville  pada tanggal 17 Januari 1948 ternyata memberikan dampak merugikan bagi Indonesia, salah satunya memicu munculnya Agresi Militer II Belanda.</p> --}}
                          <p  ><pre style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" > {{$soal->pertanyaan}}</pre></p>
                          <input type="radio" id="a-{{$soal->id}}" name="{{$soal->id}}" value="a">
                            <label style="margin-left: 1rem;color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="a-{{$soal->id}}">{{$soal->a}}</label>
                          <br>
                          <input type="radio" id="b-{{$soal->id}}" name="{{$soal->id}}" value="b">
                             <label style="margin-left: 1rem; color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="b-{{$soal->id}}">{{$soal->b}}</label>
                          <br>
                          <input type="radio" id="c-{{$soal->id}}" name="{{$soal->id}}" value="c">
                             <label style="margin-left: 1rem;color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="c-{{$soal->id}}">{{$soal->c}}</label>
                          <br>
                          <input type="radio" id="d-{{$soal->id}}" name="{{$soal->id}}" value="d">
                             <label style="margin-left: 1rem;color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="d-{{$soal->id}}">{{$soal->d}}</label>
                          <br>
                          <input type="radio" id="e-{{$soal->id}}" name="{{$soal->id}}" value="e">
                             <label style="margin-left: 1rem;color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="e-{{$soal->id}}">{{$soal->e}}</label>
                          <br>
                        </div>
                        
                      </div>
                      
                      <!-- tombol next -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          {{-- <a style="position: relative ; display: inline" class="back-to-top" ><i style="color: #ff4500" class="icofont-simple-up"></i></a> --}}
                          <hr>
                          {{-- <h2>{{$next}}</h2> --}}
                          <div class="text text-right mt-4"data-aos="fade-up" data-aos-delay="400">
                            @if ($soal->id==1)
                                
                            @else
                              <a data-target="#carouselExampleCaptions" data-slide-to="{{$prev}}"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Prev</button></a>
                            @endif
                            <a data-target="#carouselExampleCaptions" data-slide-to="{{$next}}"><button   style="background-color:orangered; border-color:orangered " class="btn btn-primary scroll-up">Next</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!--  -->

                  <div class="carousel-item">
                    <!--halaman akhir -->
                    <div class="row no-gutters">
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                       
                        <!-- paragraf 1 -->
                        <div class="col-lg-12 d-flex flex-column justify-content-center about-content ">
                          <br>
                          <div class="section-title text text-left text text-center" data-aos="fade-up" data-aos-delay="100">
                            
                            <h3 >SELESAI</h3>
                            <hr>
                            {{-- <p style="text-indent: 0" >Pilihlah Salah Satu Jawaban Pada Pertanyaan Dibawah Ini Dengan Tepat!  </p> --}}
                          </div>
                          <!-- paragraf 1 -->
                          <div class="text-justify text text-center" data-aos="fade-up" data-aos-delay="200">
                            {{-- <p style="margin-bottom: 0rem" class="description">   afif dari aingdekeh</p> --}}
                            <p style="text-indent: 0%" class="description"> Pastikan Jawaban anda sudah benar dan Koreksi Kembali Jika Perlu !</p> 
                            <a data-target="#carouselExampleCaptions" data-slide-to="1"><button style="background-color:rgb(122,122,122); border-color:rgb(122,122,122) " class="btn btn-primary scroll-up">Koreksi</button></a>               
                            <p style="text-indent: 0%;" class="description"><i> (Kembali ke no.1 )</i></p>
                            <p style="text-indent: 0%; margin-top: 15px" class="description">Jika Sudah Yakin, Silahkan Tekan <b>Kirim</b> </p>
                            
                          </div>
                        
                      </div>
                      <!-- tombol post -->
                      <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title text text-right"  data-aos="fade-up" data-aos-delay="200">
                          <hr>
                          <div class="text text-center mt-4"data-aos="fade-up" data-aos-delay="400">
                            <a><button type="submit" style="padding: 10px 150px ; background-color:orangered; border-color:orangered " class="btn btn-primary"> Kirim</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- end caarousel-->
            </div>
          </section>
          <!-- End About Us Section -->
        </form>
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
                <h4 class="sidebar-title">Catatan</h4> 
                <hr>
                <ul class="list-unstyled">
                    <li class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a>Kerjakan secara pribadi dan jujur, agar penilaian yang dilakukan berdasarkan pemahaman kalian terhadap
                              artikel yang ada, bisa maksimal.</a></h5>
                              <h5><span id="tanggalwaktu"></span></h5>
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
    <script>
      var tw = new Date();
      if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
      else (a=tw.getTime());
      tw.setTime(a);
      var tahun= tw.getFullYear ();
      var hari= tw.getDay ();
      var bulan= tw.getMonth ();
      var tanggal= tw.getDate ();
      var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
      var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
      document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
    </script>
    
    @endsection