@extends('layouts.navbar')

{{-- Content Start --}}
@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid mt-4 mb-4" data-bs-ride="carousel"> 
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
    <h1>Program Pembelajaran</h1>
  </div>

  <div class="PB">
    <div class="card" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Web Developer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Design Grafis</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Game Developer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="{{ 'assets/css/home.css' }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Link End --}}