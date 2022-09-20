@extends('layouts.navbar')

{{-- Content Start --}}
@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade container" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ 'assets/img/coba.jpeg' }}" class="d-block w-100 h-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/coba2.jpg' }}" class="d-block w-100 h-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/coba3.jpeg' }}" class="d-block w-100 h-50" alt="...">
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
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Link End --}}