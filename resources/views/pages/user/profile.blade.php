@extends('layouts.client.master')
@section('header')
  <title>Simso | Profile</title>  
  <style>
    .validate{
      margin: 0px !important;
    }
    .contact .form-profile {
      width: 100%;
      background: #fff;
    }

    .contact .form-profile .form-group {
      padding-bottom: 4px;
    }

    .contact .form-profile .validate {
      display: none;
      color: red;
      margin: 0 0 10px 0;
      font-weight: 400;
      font-size: 13px;
    }

    .contact .form-profile .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .form-profile .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .form-profile .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }

    .contact .form-profile .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #18d26e;
      border-top-color: #eee;
      -webkit-animation: animate-loading 1s linear infinite;
      animation: animate-loading 1s linear infinite;
    }

    .contact .form-profile input, .contact .form-profile textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }

    .contact .form-profile input {
      height: 34px;
    }

    .contact .form-profile textarea {
      padding: 10px 12px;
    }

    .contact .form-profile button[type="submit"] {
      background: #1acc8d;
      border: 0;
      padding: 10px 30px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .form-profile button[type="submit"]:hover {
      background: #34e5a6;
    }
  </style>
@endsection
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5" style="min-height: 75vh;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Profile {{(!$user->pelanggan) ? Str::title($user->username) : Str::title($user->pelanggan->nama)}}</h2>      
    </div>   
    <div class="row">
      <div class="col-lg-4 text-center" data-aos="fade-right" data-aos-delay="100">
        <img src="{{$user->pelanggan->getAvatar()}}" alt="" class="img-fluid" style="max-height: 300px;">
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <form action="/postupdateprofile" method="post" role="form" class="form-profile" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <label for="nama"><small class="text-primary">Nama Lengkap</small></label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Nama minimal 4 karakter" value="{{$user->pelanggan->nama}}"/>
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <label for="email"><small class="text-primary">Alamat Email</small></label>
              <input type="email" class="form-control" placeholder="Alamat Email"  value="{{$user->email}}" readonly/>
            </div>
          </div>          
          <div class="form-row">
            <div class="col-md-6 form-group">
              <label for="telepon"><small class="text-primary">No Handphone</small></label>
              <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Nomor Handphone" data-rule="minlen:9" data-msg="Masukkan nomor yang aktif" value="{{$user->pelanggan->telepon}}"/>
              <div class="validate"></div>
            </div> 
            <div class="col-md-6 form-group">
              <label for="avatar"><small class="text-primary">Ganti Avatar</small></label>
              <input type="file" name="avatar" class="form-control" id="avatar"/>
            </div>           
          </div>
          <div class="text-center"><button type="submit">Simpan</button></div>
        </form>
        <p>Ganti password anda <a href="/gantipassword">disini</a>.</p>
      </div>
    </div>
    <hr>
    <div class="section-title" data-aos="fade-up">
      <h2>Sekolah {{(!$user->pelanggan) ? Str::title($user->username) : Str::title($user->pelanggan->sekolah)}}</h2>      
    </div>   
    <div class="row">
      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <img src="{{$user->pelanggan->getLogo()}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <form action="/postupdatesekolah" method="post" role="form" class="form-profile">
          @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <label for="sekolah"><small class="text-primary">Nama Sekolah</small></label>
              <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Nama Sekolah" data-rule="minlen:4" data-msg="Nama minimal 4 karakter" value="{{$user->pelanggan->sekolah}}"/>
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <label for="telepon_sekolah"><small class="text-primary">Telepon Sekolah</small></label>
              <input type="text" name="telepon_sekolah" class="form-control" id="telepon_sekolah" placeholder="Nomor Telepon Sekolah" data-rule="minlen:9" data-msg="Masukkan nomor yang aktif" value="{{$user->pelanggan->telepon_sekolah}}"/>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="alamat"><small class="text-primary">Alamat Sekolah</small></label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" data-rule="minlen:10" data-msg="Harap isi alamat lengkap!" placeholder="Alamat Sekolah">{{$user->pelanggan->kota}}</textarea>
            <div class="validate"></div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <label for="kota"><small class="text-primary">Kota</small></label>
              <input type="text" name="kota" class="form-control" id="kota" placeholder="Kota" data-rule="required" data-msg="Harap isi Kota!" value="{{$user->pelanggan->kota}}"/>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <label for="provinsi"><small class="text-primary">Provinsi</small></label>
              <input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="Provinsi" data-rule="required" data-msg="Harap isi provinsi!" value="{{$user->pelanggan->provinsi}}"/>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <label for="kode_pos"><small class="text-primary">Kode Pos</small></label>
              <input type="text" name="kode_pos" class="form-control" id="kode_pos" placeholder="Kode Pos" data-rule="minlen:5" data-msg="Harap isi kode pos!" value="{{$user->pelanggan->kode_pos}}"/>
              <div class="validate"></div>
            </div>
          </div> 
          <div class="form-row">
            <div class="col-md-4 form-group">
              <label for="logo_sekolah"><small class="text-primary">Logo Sekolah</small></label>
              <input type="file" name="logo_sekolah" class="form-control" id="logo_sekolah"/>
            </div>
          </div>         
          <div class="text-center"><button type="submit">Simpan</button></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->
<div id="hasil"></div>  
@endsection
@section('footer')
<script src="{{asset('landing')}}/js/profile.js"></script>
@endsection