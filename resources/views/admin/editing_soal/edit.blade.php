@extends('layouts.templateedit')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('listsoal') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> Soal No.{{$editsoal->id}}</h4><hr>
                                    <form method="POST" action="/listsoal/update/{{$editsoal->id}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{-- <div class="form-group row">
                                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar </label>
                                            <div class="col-md-6">
                                                <img class=""  width="50%" src="" alt="belum ada gambar" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar Baru</label>
                                            <div class="col-md-6">
                                                <input id="gambar" type="file" class="form-control" name="gambar" value=""  autocomplete="" autofocus>

                                                @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}r</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br> --}}
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Pertanyaan</label>

                                            <div class="col-md-6">
                                                {{-- <input id="nama" type="textarea" class="form-control @error('nama') is-invalid @enderror" name="judul" value="{{$editsoal->pertanyaan}}" required autocomplete="" autofocus> --}}
                                                <textarea id="ckedtor" class="ckeditor form-control @error('deskripsi') is-invalid @enderror" name="pertanyaan" value="" required ="" autofocus id="" cols="30" rows="7">{{$editsoal->pertanyaan}}</textarea>
                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Jawaban A</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="a" value="{{$editsoal->a}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Jawaban B</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="b" value="{{$editsoal->b}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Jawaban C</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="c" value="{{$editsoal->c}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Jawaban D</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="d" value="{{$editsoal->d}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Jawaban E</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="e" value="{{$editsoal->e}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Kunci Jawaban</label>

                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control @error('link video') is-invalid @enderror" name="kunci" value="{{$editsoal->kunci}}" placeholder="boleh diisi boleh tidak" required autocomplete="" autofocus>

                                                @error('link video')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button onclick="sucses()" type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Update Data
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>

function sucses() {
    Swal.fire({
    title: "Berhasil!",
    text: "Perubahan telah disimpan",
    icon: "success",
    // timer: 15000,

    button: true,
})
}
</script>          

@endsection
