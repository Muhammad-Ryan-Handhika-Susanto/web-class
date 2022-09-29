@extends('layouts.navbar')

{{-- Content Start --}}
@section('content')
{{-- Home Page Start --}}
<div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid mt-4 mb-4" data-bs-ride="carousel"> 
  <video controls class="video">
    <source src="{{ 'assets/vidio/movie.mp4' }}" type="video/mp4">
    <source src="movie.ogg" type="video/ogg">
  </video>
  </div>

  <div class="sambutan reveal transisi-PB">
    <h1>Program Pembelajaran</h1>

  <div class="PB">
    <div class="card home reveal PB-card1" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Web Developer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card home reveal PB-card2" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Design Grafis</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card home reveal PB-card3" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Game Developer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>
{{-- Home Page End --}}

{{-- Teachers Page Start --}}
<div class="container sambutan">
  <div class="reveal Teacher-Text">
    <h1>Teachers</h1>
  </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 mt-3 mb-3">
            <div class="card rounded teachers reveal Teacher-card1">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Aulia Rachman</h3>
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
        <div class="col-lg-4 col-md-6 mt-3 mb-3">
            <div class="card rounded teachers reveal Teacher-card2">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Haris Maulana</h3>
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
            <div class="card rounded teachers reveal Teacher-card3">
                <div class="img">
                    <img class="img-fluid rounded-top" src="{{ 'assets/img/coba.jpeg' }}" alt="">
                    <img class="rounded-circle" src="{{ 'assets/img/coba3.jpeg' }}" width="200px" height="200px" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Haris Maulana</h3>
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
<div class="judul sambutan reveal Memories-Text">
    <h1>PPLG X RPL</h1>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card1">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card1">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card1">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card1">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card2">
        <div class="inner">
          <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow memo reveal Memories-card1">
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
<link rel="stylesheet" href="{{ 'assets/css/index.css' }}">
<script src="{{ 'assets/js/index.js' }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Link End --}}