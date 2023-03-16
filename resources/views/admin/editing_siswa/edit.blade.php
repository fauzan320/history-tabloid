@extends('layouts.templateedit')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('siswa') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> {{$editsiswa->name}}</h4><hr>
                                    <form method="POST" action="/siswa/update/{{$editsiswa->id}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        
                                        
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Nama</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="nama" value="{{$editsiswa->name}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Kelas</label>

                                            <div class="col-md-6">
                                                <!-- <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="kelas" value="{{$editsiswa->kelas}}" required autocomplete="" autofocus> -->
                                                <select type="text" name="kelas" id="kelas" placeholder="Kelas" class="form-control @error('deskripsi') is-invalid @enderror" value="{{$editsiswa->kelas}}" required autocomplete="kelas" autofocus>
                                                    <option value="11 MIPA 1">{{$editsiswa->kelas}}</option>
                                                    <optgroup style="color: #666; " label="MIPA">
                                                        <option value="11 MIPA 1">11 MIPA 1</option>
                                                        <option value="11 MIPA 2">11 MIPA 2</option>
                                                        <option value="11 MIPA 3">11 MIPA 3</option>
                                                        <option value="11 MIPA 4">11 MIPA 4</option>
                                                    </optgroup>
                                                    <optgroup style="color: #666;" label="IPS">
                                                        <option value="11 IPS 1">11 IPS 1</option>
                                                        <option value="11 IPS 2">11 IPS 2</option>
                                                        <option value="11 IPS 3">11 IPS 3</option>
                                                        <option value="11 IPS 4">11 IPS 4</option>
                                                    </optgroup>
                                                    
                                                </select>
                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Nilai</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="nilai" value="{{$editsiswa->nilai}}" required autocomplete="" autofocus>
                                                @error('deskripsi')
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
                                                    <i class="fa fa-save"></i> Update Data Siswa
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
