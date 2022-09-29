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

  <div class="sambutan reveal ProgramP-Text">
    <h1>Program Pembelajaran</h1>

  <div class="PB">
    <div class="card home reveal ProgramP-card1" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Web Developer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card home reveal ProgramP-card2" style="width: 18rem;">
      <img src="{{ 'assets/img/coba.jpeg' }}" class="card-img-top" alt="Game Developer">
      <div class="card-body">
        <h5 class="card-title">Design Grafis</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card home reveal ProgramP-card3" style="width: 18rem;">
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
  <div class="guru mb-4 reveal Teacher-Text">
    <h1>Guru</h1>
  </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
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
                            <p></p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                      <i class="fa fa-facebook jumbo"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
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
                            <p></p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
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
                            <p></p>
                            <hr>
                        </div>
                    </div>
                    <div class="card-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-twitter"></i>
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
<div class="judul sambutan memories">
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

{{--Achievement start--}}
<div class="judul sambutan reveal Achv-Text">
  <h1 class="achievement">Penghargaan</h1>
</div>

<div class="container">
	<div class="row">
					<div class="col-md-4 d-flex justify-content-center align-items-center mb-3">
				<div class="card penghargaan reveal Achv-card1">
  <img class="img-cover" src="{{'assets/img/1.jpeg'}}" alt="tidak dapat load gambar" width="100%" height="200">
  <div class="card-body">
    <p class="card-text">Sertifikat Lomba Teknik Desain Laman (Web Technologies) Juara 1 yang diperoleh Jovanko Alexandro</p>
  </div>
</div>			
</div>
					<div class="col-md-4 d-flex justify-content-center align-items-center mb-3">
				<div class="card penghargaan reveal Achv-card1">
  <img class="img-cover" src="{{'assets/img/2.jpeg'}}" alt="tidak dapat load gambar" width="100%" height="200">
  <div class="card-body">
    <p class="card-text">Sertifikat Lomba Graphic Design Juara 1 yang diperoleh Daffa Muqsith Ismoro</p>
  </div>
</div>
</div>
					<div class="col-md-4 d-flex justify-content-center align-items-center mb-3">
				<div class="card penghargaan reveal Achv-card1">
  <img class="img-cover" src="{{'assets/img/3.jpeg'}}" alt="tidak dapat load gambar" width="100%" height="200">
  <div class="card-body">
    <p class="card-text">Sertifikat Lomba Teknik Desain Laman (Web Technologies) Juara 3 yang diperoleh Jovanko Alexandro</p>
  </div>
</div>
</div>
					<div class="col-md-4 d-flex justify-content-center align-items-center mb-3">
				<div class="card penghargaan">
  <img class="img-cover" src="{{'assets/img/4.jpeg'}}" alt="tidak dapat load gambar" width="100%" height="200">
  <div class="card-body">
    <p class="card-text">Sertifikat Lomba IT Software Solution for Business Juara 1 yang diperoleh Rizqya Sanria Juliana</p>
  </div>
</div>
</div>
					<div class="col-md-4 d-flex justify-content-center align-items-center mb-3">
				<div class="card penghargaan">
  <img class="img-cover" src="{{'assets/img/5.jpeg'}}" alt="tidak dapat load gambar" width="100%" height="200">
  <div class="card-body">
    <p class="card-text">Sertifikat Lomba Teknologi Desain Grafis Juara 1 yang diperoleh Daffa Muqsith Ismoro</p>
  </div>
</div>
</div>	
</div>
</div>
{{--achievement end--}}

{{-- information page start --}}
  <div class="sambutan info">
    <h1>Informasi</h1>
  </div>

  <div class="card text-bg-dark" >
    <img src="{{ 'assets/img/bg3.jpg' }}" class="card-img" alt="...">
    <div class="card-img-overlay overflow">
      <br>
      <br>
      <br>
      <h1 class="card-title">PENGERTIAN RPL(Rekayasa Perangkat Lunak)</h1>
      <p class="card-text"> <strong>Rekayasa Perangkat Lunak atau biasa disingkat dengan RPL adalah salah satu bidang profesi dan juga mata pelajaran yang mempelajari tentang pengembangan perangkat-perangkat lunak termasuk dalam hal pembuatannya, pemeliharaan hingga manajemen organisasi dan manajemen kualitasnya.</strong>  Bisa dikatakan RPL ini merupakan sebuah perubahan yang terjadi pada perangkat lunak guna melakukan pengembangan, pemeliharaan, dan pembangunan kembali dengan menerapkan prinsip rekayasa sehingga memperoleh perangkat lunak yang bisa bekerja secara lebih efisien dan efektif pada user nantinya.
  <br>
  Perangkat lunak sendiri merupakan sekumpulan data yang tersimpan dan terprogram oleh sistem komputer, istilah ini cukup umum dengan sebutan software. Merupakan elemen dari komputer, software menjadi elemen yang tidak tampak secara fisik. Ia berisi instruksi-instruksi yang diprogram dan bisa berada di perangkat keras manapun, software pada mulanya adalah sebuah kode mesin atau machine code yang dibuat oleh seorang ilmuwan. Berisi angka-angka biner yang dapat dikenali oleh komputer, terkhusus prosesor. Software bekerja dengan membuat instruksi tertentu dalam melakukan perhitungan, logika, input-output, dan aritmatika pada prosesor.
  <br>
  Di Indonesia RPL sudah dipelajari sejak tingkat Sekolah Menengah Kejuruan hingga ke perguruan tinggi, di tingkat SMK terdapat jurusan tersendiri untuk mempelajari dan menerapkan rekayasa perangkat lunak. Sedangkan pada perguruan tinggi biasanya terdapat pada jurusan yang terkait dan perl untuk memahami RPL seperti pada jurusan komputer. Materi-materi yang dipelajari biasanya seperti bahasa pemrograman, desain web, pengetahuan terkait Undang-Undang ITE dan HAKI, namun tergantung kepada sekolah dan kurikulum pada tiap tahunnya.
  <br>
  <br>
  <strong> Beberapa ahli memberikan penjelasan yang sedikit berbeda satu dengan lainnya, teori ini jugalah yang digunakan oleh dunia pendidikan untuk diberikan sebagai pemahaman kepada pelajarnya.</strong>
  <br>
  <br>
  <strong>1.Stephen R.Schach</strong>
  <br>
  RPL adalah sebuah disiplin ilmu yang mana dibuat untuk kepentingan menghasilkan perangkat lunak yang bebas dari kesalahan, pengiriman yang tepat waktu, dan memuaskan keinginan pemakainya.
  <br>
  <br>
  <strong>2.Fritz Bauer</strong>
  <br>
  Ia mengartikan RPL sebagai pengembangan dan penggunaan prinsip rekayasa dalam rangka memperoleh perangkat lunak yang bisa dipercaya dan bekerja secara efisien dan dilakukan pada mesin nyata.
  <br>
  <br>
  <strong>3.Institute of Electrical and Electronics Engineers 610.12</strong> 
  <br>
  Sedangkan menurut IEEE, adalah sebuah studi dan aplikasi dengan menggunakan pendekatan yang bersifat kuantifiabel, disiplin, dan sistematis kepada pengembangnya, memiliki operasi dan pemeliharaan perangkat lunak yang merupakan aplikasi.</p>
    
    </div>
  </div>
  <div class="container text-center">
    <div class="row mt-4">
      <div class="col satu">
      <strong>INFORMASI PPLG SMK TI MUHAMMADIYAH</strong>
      <br>
      <br>
  PPLG/RPL  adalah salah satu jurusan yang ada diSMK TI MUHAMMADIYAH
  <br>
  jurusan ini sekarang sudah angkatan
  <br>
  <img src="{{ 'assets/img/mutu.png' }}" alt="" class="foto">
  <br>
  <strong>LEB PPLG SMK TI MUHAMMADIYAH </strong>
  <br>
  <br>
  <img src="{{ 'assets/img/RPL2.jpg' }}" alt="" class="foto">
  <br>
  <br>
  <br>
      </div>
      <div class="col dua">
        <strong>YANG MENGAJAR DI LEB PPLG </strong> 
        <br>
        1.Pak Aulia Racman
        <br>
        2.Pak Haris Maulan Ikhsan
        <br>
        <br>
        <br>
        <strong>TEKNISI LEB PPLG</strong>
        <br>
        Pak Akbar Nugraha Siregar
        <link rel="stylesheet" href="<i class="fa-brands fa-instagram"></i>">
        <br>
        <br>
        <br>
        <strong>KEGIATAN YANG ADA DI LEB PPLG</strong> 
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ 'assets/img/RPL3.jpg' }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
      <img src="{{ 'assets/img/RPL6.jpg' }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/RPL13.jpg' }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/RPL14.jpg' }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/img/RPL15.jpg' }}" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
{{-- information page end --}}
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="{{ 'assets/css/index.css' }}">
<script src="{{ 'assets/js/index.js' }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
{{-- Link End --}}