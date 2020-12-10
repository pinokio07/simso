<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Simso - Home</title>
  <meta content="" name="Simso Official Site">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('/img/icon.png')}}" rel="icon">
  <link href="{{asset('/img/icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('landing')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('landing')}}/css/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('landing')}}/fontawesome-free/css/all.min.css">
  <style type="text/css">
    .card-tools{
      float: right;
      margin-right: -.625rem;
    }
    button[aria-expanded=true] .fa-plus {
       display: none;
    }
    button[aria-expanded=false] .fa-minus {
       display: none;
    }
  </style>
  <!-- =======================================================
  * Template Name: Bootslander - v2.1.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        {{-- <h1 class="text-light"><a href="/"><span>Simso</span></a></h1> --}}
        {{-- Uncomment below if you prefer to use an image logo --}}
        <a href="/"><img src="{{asset('/img/logo-web.png')}}" alt="" class="img-fluid"></a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Utama</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#fitur">Fitur</a></li>
          <li><a href="#galeri">Galeri</a></li>
          {{-- <li><a href="#klien">Clients</a></li> --}}
          <li><a href="#harga">Harga</a></li>         
          <li><a href="#hubungi">Hubungi</a></li>
          @if(auth()->check())
          <li><a href="/clientarea">Client Area</a></li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>E-Learning & Manajemen Sekolah <span>Gratis</span></h1>
            <h2></h2>
            <div class="text-center text-lg-left">
              <a href="#tentang" class="btn-get-started scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('landing')}}/img/webapp.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right"></div>
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Sistem Informasi Manajemen Sekolah Online (Simso)</h3>
            <p class="text-justify">Simso adalah platform belajar online dan manajemen sekolah GRATIS. 
              Dengan simso Sekolah dapat menyelenggarakan pembelajaran secara online dengan fitur Pembelajaran yang terukur berbasis Kompetensi Dasar, Materi/Modul yang terintegrasi dengan Absensi, Penugasa dan Penilaian/Ujian yang otomatis terekap menjadi Leger Nilai dan Rapor.
              Selain itu Pihak Manajemen Sekolah juga dapat memonitoring kegiatan Pembelajaran yang dilakukan oleh Pendidik dan capaian Nilai Peserta Didik..</p>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class='bx bx-list-check'></i></div>
              <h4 class="title"><a href="#">Absensi Siswa</a></h4>
              <p class="description">Absensi siswa online.</p>
            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class='bx bx-book-reader'></i></div>
              <h4 class="title"><a href="#">E-Learning</a></h4>
              <p class="description">Sistem pembelajaran online.</p>
            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class='bx bx-book-content' ></i></div>
              <h4 class="title"><a href="#">Penilaian</a></h4>
              <p class="description">Penilaian terintegrasi dengan rapor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="fitur" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Fitur</h2>
          <p>Fitur pada aplikasi kami</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-building-2-line" style="color: #4200FF;"></i>
              <h3><a href="">Managemen Sekolah</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-list-check" style="color: #4200FF;"></i>
              <h3><a href="">Absensi Online</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-book-open-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Pembelajaran Online</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-clipboard-line" style="color: #0BACE1;"></i>
              <h3><a href="">Monitoring Pembelajaran</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-book-read-line" style="color: #1E00FF;"></i>
              <h3><a href="">Penilaian berbasis KD</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-contacts-book-line" style="color: #1AECFF;"></i>
              <h3><a href="">Leger Kelas dan Rapor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-edit-2-line" style="color: #C0012E;"></i>
              <h3><a href="">Ujian Online</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-quill-pen-fill" style="color: #3EF954;"></i>
              <h3><a href="">Lightweight</a></h3>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Features Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="galeri" class="gallery">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>
        <div class="row no-gutters" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{asset('landing')}}/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{asset('landing')}}/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{asset('landing')}}/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{asset('landing')}}/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{asset('landing')}}/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{asset('landing')}}/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{asset('landing')}}/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('landing')}}/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('landing')}}/img/gallery/gallery-9.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-9.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('landing')}}/img/gallery/gallery-10.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-10.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('landing')}}/img/gallery/gallery-11.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('landing')}}/img/gallery/gallery-12.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{asset('landing')}}/img/gallery/gallery-12.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Gallery Section -->
    <!-- ======= Client Section ======= -->
    {{-- <section id="klien" class="counts">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our Clients</h2>
          <p>Our Happy Clients</p>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/dsv.png" class="img-fluid" style="height: 60px;">
              <p>DFDS Indonesia</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/arlamas.gif" class="img-fluid" style="height: 60px;">
              <p>Armada Laju Mas</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/fadilah.png" class="img-fluid" style="height: 60px;">
              <p>Sekolah Fadilah</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/gghotel.png" class="img-fluid" style="height: 60px;">
              <p>Gema Gawita Hotel</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/sshotel.png" class="img-fluid" style="height: 60px;">
              <p>Sweet Seventeen Hotel</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="count-box">              
              <img src="{{asset('landing')}}/img/rabbani.jpg" class="img-fluid" style="height: 60px;">
              <p>Rabbani Cell</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Client Section --> --}}
    <!-- ======= Pricing Section ======= -->
    <section id="harga" class="pricing">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Harga</h2>
          <p>Pilih kriteria aplikasi</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-md-12">
            <div class="accordion mb-2" id="accordionFree">
              <div class="card">
                <div class="card-header bg-success" id="headingFree">
                  <h6 class="mb-0 text-white">
                    Versi Gratis
                    <div class="card-tools">
                      <button class="btn btn-light btn-sm collapsed" type="button" data-toggle="collapse" data-target="#freeitems" aria-expanded="false" aria-controls="freeitems">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </h6>
                </div>
                <div id="freeitems" class="collapse" aria-labelledby="headingFree" data-parent="#accordionFree">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Managemen Sekolah</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Absensi Siswa</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Pembelajaran Online</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Penilaian Siswa</label>
                        </div>
                      </div>                      
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Leger Kelas</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Limit 100 Users</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input checkFalse" type="checkbox" checked="checked">
                          <label class="form-check-label">Limit 100 Modul</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input pref" type="checkbox" disabled="disabled">
                          <label class="form-check-label">
                            <strike style='color:red'>
                              <span style='color:black'>Import/Export Nilai<span>
                            </strike>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input pref" type="checkbox" disabled="disabled">
                          <label class="form-check-label">
                            <strike style='color:red'>
                              <span style='color:black'>Monitoring Pembelajaran<span>
                            </strike>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled="disabled">
                          <label class="form-check-label">
                            <strike style='color:red'>
                              <span style='color:black'>Ujian Online<span>
                            </strike>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 mb-2">
                        <div class="form-check">
                          <input class="form-check-input pref" type="checkbox" disabled="disabled">
                          <label class="form-check-label">
                            <strike style='color:red'>
                              <span style='color:black'>Print Leger dan Rapor<span>
                            </strike>
                          </label>
                        </div>
                      </div>                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row mr-1">                      
                      <div class="col-md-12 text-right">
                        <a href="#hubungi" class="btn-buy daftar" data-jenis="Gratis">Daftar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- ======= Contact Section ======= -->
    <section id="hubungi" class="contact">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Hubungi</h2>
          <p>Hubungi Kami</p>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p></p>
              </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>infosimso@gmail.com</p>
              </div>
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call/Whatsapp:</h4>
                <p>+62 821-1334-1700</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <form action="/daftar" method="post" role="form" class="php-email-form">
              @csrf
              <input type="hidden" id="status" name="status">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Silahkan tuliskan nama lengkap!" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Tuliskan alamat email anda yang aktif!" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="sekolah" id="sekolah" placeholder="Sekolah" data-rule="minlen:4" data-msg="Tuliskan nama sekolah anda!" />
                <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="telepon" id="telepon" placeholder="No Telp/Hp" data-rule="minlen:9" data-msg="Tuliskan no telp anda yang aktif!" />
                <div class="validate"></div>
                </div>
              </div>              
              <div class="form-group">
                <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Harap isi pesan anda!" placeholder="Pesan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Data anda telah terkirim. Silahkan cek inbox untuk verifikasi email. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Daftar</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">    
    <div class="container">
      <div class="copyright pt-2">
        &copy; Copyright <strong><span>Simso</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="{{asset('landing')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('landing')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('landing')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  {{-- <script src="{{asset('landing')}}/vendor/php-email-form/validate.js"></script> --}}
  <script src="{{asset('landing')}}/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('landing')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('landing')}}/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('landing')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('landing')}}/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('landing')}}/js/main.js"></script>
  <script src="{{asset('landing')}}/js/validate.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
      $(document).on('click', '.daftar', function(){
        var jenis = $(this).data('jenis')
        var pesan = "Kami hendak menggunakan aplikasi simso versi "+jenis;
        $('#message').html(pesan);
        $('#status').val(jenis);
      });
      
      $(".checkFalse").on("click", function (e) {        
        // do the confirmation thing here
        e.preventDefault();
        return false;        
      });

    });
  </script>
</body>
</html>