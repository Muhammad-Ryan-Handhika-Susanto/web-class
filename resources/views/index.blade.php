@extends('layouts.navbar')

{{-- Content Start --}}
@section('content')
{{-- Home Page Start --}}
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
{{-- Home Page End --}}

{{-- Teachers Page Start --}}
<div class="container text-center">
    <h1>Teachers</h1>
    <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card rounded">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-uppercase">Aulia Rachman</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit temporibus labore ad non? Sit quasi rem odio minus saepe dicta, error quo fuga consectetur voluptatibus. Reprehenderit vero rerum eveniet voluptas!</p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card rounded">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-uppercase">Haris Maulana</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit temporibus labore ad non? Sit quasi rem odio minus saepe dicta, error quo fuga consectetur voluptatibus. Reprehenderit vero rerum eveniet voluptas!</p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card rounded">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-uppercase">Haris Maulana</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit temporibus labore ad non? Sit quasi rem odio minus saepe dicta, error quo fuga consectetur voluptatibus. Reprehenderit vero rerum eveniet voluptas!</p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Teachers Page End --}}

{{-- Memories Page Start --}}
<div class="judul">
    <h1>PPLG X RPL</h1>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow mt-2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- Memories Page End --}}
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="{{ 'assets/css/home.css' }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Link End --}}