@extends('layouts.navbar')

{{-- Content Start --}}
@section('content')
<div class="sambutan">
  <h1>Selamat Datang di Wesite PPLG</h1>
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid mt-4 mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ 'assets/img/coba.jpeg' }}" class="d-block" alt="Gambar 1">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/coba2.jpg' }}" class="d-block" alt="Gambar 2">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/coba3.jpeg' }}" class="d-block" alt="Gambar 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="sambutan">
    <h1>Bahasa Pemrograman Yang Digunakan</h1>
  </div>

  <div class="img container mt-5">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mb-4" width="300px" alt="...">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mb-4" width="300px" alt="...">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mb-4" width="300px" alt="...">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mt-4" width="300px" alt="...">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mt-4" width="300px" alt="...">
    <img src="{{ 'assets/img/coba.jpeg' }}" class="img-thumbnail ms-5 mt-4" width="300px" alt="...">
  </div>
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="{{ 'assets/css/home.css' }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Link End --}}