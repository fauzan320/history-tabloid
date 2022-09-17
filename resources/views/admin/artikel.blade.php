@extends('admin.layout_admin3')

 @section('link_css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <style>
html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
 </style>
 
 @endsection
 @section('menu')
 <li class="list ">
   <b></b>
   <b></b>
   <a href="{{ route('admin.home') }}">
     <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
     <span class="title">E-Histab</span>
   </a>
 </li>
 <li class="list ">
   <b></b>
   <b></b>
   <a href="{{ route('siswa') }}">
     <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
     <span class="title">Siswa</span>
   </a>
 </li>
 <li class="list active">
   <b></b>
   <b></b>
   <a href="#">
     <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
     <span class="title">Artikel</span>
   </a>
 </li>
 <li class="list">
   <b></b>
   <b></b>
   <a href="{{ route('listsoal') }}">
     <span class="icon"><ion-icon name="lock-open-outline"></ion-icon></span>
     <span class="title">List Soal</span>
   </a>
 </li>
@endsection
 @section('conten')
 <div class="container">
 
        <h2 class="mb-2">List Artikel</h2> 
        <div class="row">
            <div class="col-md-12">
                <a style="background-color: orangered; border-color: orangered" href="{{ route('tambahartikel') }}" class="btn btn-primary"><i class="fa fa-plus"></i>+ Tambah Artikel</a>
            </div>
            @foreach ($artikels as $artikel)
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="{{ url('gambar/artikel/'.$artikel->gambar) }}">
                    <div class="card-block">
                        <figure class="profile">
                            <img  src="{{ url('gambar/artikel/'.$artikel->gambar) }}" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">{{$artikel->judul}}</h4>
                        <div class="meta">
                            <a>author: {{$artikel->author}}</a>
                        </div>
                        <div class="card-text">
                            {{$artikel->deskripsi}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>diupload tanggal {{$artikel->tanggal}}</small> <hr>
                        <a href="/artikel_destroy/{{$artikel->id}}"><button  style="margin-left: 5px" class="btn btn-danger float-right btn-sm">hapus</button></a>
                        <a href="/artikel/edit/{{$artikel->id}}"><button style="margin-left: 5px" class="btn btn-primary float-right btn-sm">edit</button> </a>
                        <a href="/artikel/show/{{$artikel->id}}"><button class="btn btn-warning float-right btn-sm">show</button></a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
        {{-- </div> --}}
</div>
 
 @endsection