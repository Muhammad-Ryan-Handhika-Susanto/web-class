<!-- Navbar Start -->
<nav class="navbar navbar-dark bg-primary fixed-top shadow p-3 mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ 'assets/img/mutu.png' }}" alt="Logo PPLG" width="30" height="30" class="d-inline-block align-text-top">
      PPLG_WEB
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dasboard</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Memories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Achievements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Information</a>
          </li>
      </div>
    </div>
  </div>
</nav>

<div style="margin-bottom: 70px;">
  .
</div>
<!-- Navbar End -->

{{-- Content Start --}}
@yield('content')
{{-- Content End --}}

<!-- Link Start -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ 'assets/css/navbar.css' }}">
<!-- Link End -->