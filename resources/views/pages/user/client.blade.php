@extends('layouts.client.master')
@section('header')
  <title>Simso | Client Area</title>  
@endsection
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5" style="min-height: 75vh;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Selamat Datang, {{(!$user->pelanggan) ? Str::title($user->username) : Str::title($user->pelanggan->nama)}}</h2>      
    </div>   
    <div class="row">
      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <div class="info">
          <div class="address">
            <i class="icofont-user"></i>
            <h4>Alamat Aplikasi:</h4>
            <p>
              @if($user->pelanggan()->exists() && $user->pelanggan->aktif > 0 && $user->pelanggan->subdomain != '')
                <a href="{{$user->pelanggan->subdomain}}">{{$user->pelanggan->subdomain}}</a>
              @else
                Akun anda belum aktif.
              @endif
              
            </p>
          </div>
          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Nama Sekolah:</h4>
            <p>{{(!$user->pelanggan) ? '' : Str::title($user->pelanggan->sekolah)}}</p>
          </div>
          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Telepon:</h4>
            <p>{{$user->pelanggan->telepon ?? ''}}</p>
          </div>
          <div class="phone">
            <i class="icofont-gear"></i>
            <h4>Paket:</h4>
            <p>{{$user->pelanggan->status ?? ''}}</p>
          </div>         
        </div>
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
        @if($user->pelanggan()->exists() && $user->pelanggan->aktif > 0)
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="icofont-users-alt-2"></i>
                  <span data-toggle="counter-up">{{$siswa}}</span>
                  <p>Siswa</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                  <i class="icofont-users-alt-5"></i>
                  <span data-toggle="counter-up">{{$guru}}</span>
                  <p>Guru</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="icofont-filter"></i>
                  <span data-toggle="counter-up">{{$kelas}}</span>
                  <p>Romble</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="icofont-gears"></i>
                  <span data-toggle="counter-up">{{$jurusan}}</span>
                  <p>Jurusan</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Counts Section -->
        @else
          Aplikasi anda sedang dalam proses, silahkan lengkapi data sekolah anda <a href="/user-profile">disini</a>.
        @endif
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<div id="hasil"></div>  
@endsection
@section('footer')
<script>
  
</script>
@endsection