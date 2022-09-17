@extends('admin.layout_admin3')
@section('menu')
  <li class="list  active">
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
  <li class="list">
    <b></b>
    <b></b>
    <a href="{{ route('artikel') }}">
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
    ndak tau masih mauu diisi apa 
@endsection