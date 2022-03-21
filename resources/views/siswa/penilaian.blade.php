@extends('template.templateedit')

@section('content')
                <div class="container" data-aos="flip-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-12">
                            <a style="background-color:orangered; border-color:orangered " href="{{ url('/tabloid') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                            
                        </div>
                        
                        <div class="col-md-12 mt-2" >
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> <Strong>Penilaian</Strong> </h4>
                                    {{-- <p> <i>
                                        Jawablah Respon Dibawah ini untuk menuliskan pemahamanmu !
                                    </i></p> --}}
                                    <hr>
                                    <div class=" text text-center" data-aos="fade-right" data-aos-delay="1000">
                                        <i>
                                        <p>
                                            Naskah perjanjian Renville ditandatangani pada tanggal .......
                                        </p>
                                        </i>
                                    </div>

                                    <form method="POST" action="{{url('/home')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        
                                        
                                        <div class="form-group row"data-aos="fade-right" data-aos-delay="500">
                                            <label for="jawaban" class="col-md-2 col-form-label text-md-right">Jawaban</label>
                                            <div class="col-md-6">
                                                <textarea  class="form-control @error('jawaban') is-invalid @enderror" name="jawaban" value="" required ="" autofocus id="" cols="30" rows="7"></textarea>
                                                @error('jawaban')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button style="background-color:orangered; border-color:orangered " type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Kirim
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection