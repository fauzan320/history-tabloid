<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Soal Penilaian</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="penilaian/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="penilaian/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="penilaian/css/style.css"/>

	@include('sweetalert::alert')
    
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="{{route('post')}}" method="post">
					@csrf
		        	<div id="form-total" data-aos="fade-up" data-aos-delay="1000">
                        <!-- SECTION 0 -->
			            <h2>
			            	<p class="step-icon"><span>00</span></p>
			            	{{-- <span class="step-text">Pengenalan</span> --}}
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Uji Pemahaman Siswa Terkait Sejarah Lokal Pertempuran Karang Kedawung</h3>
                                    <hr>
									<p>Kerjakan secara pribadi, agar penilaian yang dilakukan, berdasarkan pemahaman kalian terhadap
                                        bacaan tersebut, bisa maksimal. </p> 
                                        <p> <b>Selamat Mengerjakan ! </b> </p>
                                        <p>Tekan <b>Panah</b>  untuk memulai, atau tekan <a href="/tabloid3">Kembali</a> untuk meninggalkan soal.</p>
								</div>
							</div>
			            </section>
		        		<!-- SECTION isi -->
						@foreach ($soal as $soal)
						
			            <h2>
							<div class="container">
								<div class="row-5">
									<div class="col-md-3">
										@if ($soal->id>9)
										<p class="step-icon"><span>{{$soal->id}}</span></p>
										@else
											<p class="step-icon"><span>0{{$soal->id}}</span></p>
										@endif
										{{-- <span class="step-text">Soal no.{{$soal->id}}</span> --}}
									</div>
								</div>
							</div>
							
						
			            </h2>
			            <section>
			                <div class="inner">
								
								@if ($soal->id==1)
									<div class="wizard-header">
										<h3 class="heading">Kuisioner Pemahaman Siswa Terkait Sejarah Lokal Pertempuran Karang Kedawung</h3>
										<p>Pilihlah Salah Satu Jawaban Pada Pertanyaan Dibawah Ini Dengan Tepat!  </p>
										<hr>
									</div>
								@else
									<br>
								@endif
			                	
								<div class="form-row">
                                    <div class="form-holder2">
										<p  ><pre style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" > {{$soal->pertanyaan}}</pre></p>
                                        <input type="radio" id="a-{{$soal->id}}" name="{{$soal->id}}" value="a">
                                        <label style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="a-{{$soal->id}}">{{$soal->a}}</label>
                                        <br>
                                        <input type="radio" id="b-{{$soal->id}}" name="{{$soal->id}}" value="b">
                                        <label style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="b-{{$soal->id}}">{{$soal->b}}</label>
                                        <br>
                                        <input type="radio" id="c-{{$soal->id}}" name="{{$soal->id}}" value="c">
                                        <label style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="c-{{$soal->id}}">{{$soal->c}}</label>
                                        <br>
                                        <input type="radio" id="d-{{$soal->id}}" name="{{$soal->id}}" value="d">
                                        <label style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="d-{{$soal->id}}">{{$soal->d}}</label>
                                        <br>
                                        <input type="radio" id="e-{{$soal->id}}" name="{{$soal->id}}" value="e">
                                        <label style="color: #666;font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 600;" for="e-{{$soal->id}}">{{$soal->e}}</label>
                                        <br>
                                    </div>
								</div>
							</div>
			            </section>
						@endforeach
						<!-- end SECTION  -->
			            
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>00</span></p>
			            	{{-- <span class="step-text">Selesai</span> --}}
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Selesai !</h3>
									<p> Pastikan Jawaban anda sudah benar dan Koreksi Kembali Jika Perlu !</p>
                                    <p>Tekan <b>Kirim</b> jika anda sudah yakin !</p>
								</div>
                                <br>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
										<div class="plan-total">
		                					{{-- <span class="plan-title">Special Plan</span> --}}
                                            <a  href="/home"><input style="background-color: rgb(255, 102, 0); color: white " type="submit" value="Kirim Jawaban"></a>
                                            <br><br>
                                            <p  class="plan-text">Terimakasih sudah menggunakan Website ini. </p><br>
                                        </div>
			                		</div>
			                	</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="penilaian/js/jquery-3.3.1.min.js"></script>
	<script src="penilaian/js/jquery.steps.js"></script>
	<script src="penilaian/js/main.js"></script>
	@section('js')
    <script>
      $(".scroll-up").click(function() {
        $("html").animate({ scrollTop: 0 }, "slow");
        });
    </script>
    @endsection

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@include('js/alert')
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>