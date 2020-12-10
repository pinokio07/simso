@extends('layouts.client.master')
@section('header')
  <title>Simso | Login</title>
  <style>
    .contact .form-login {
      width: 100%;
      background: #fff;
    }

    .contact .form-login .form-group {
      padding-bottom: 8px;
    }

    .contact .form-login .validate {
      display: none;
      color: red;
      margin: 0 0 15px 0;
      font-weight: 400;
      font-size: 13px;
    }

    .contact .form-login .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .form-login .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .form-login .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }

    .contact .form-login .loading:before {
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

    .contact .form-login input, .contact .form-login textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }

    .contact .form-login input {
      height: 44px;
    }

    .contact .form-login textarea {
      padding: 10px 12px;
    }

    .contact .form-login button[type="submit"] {
      background: #1acc8d;
      border: 0;
      padding: 10px 30px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .form-login button[type="submit"]:hover {
      background: #34e5a6;
    }
  </style>
@endsection
@section('content')
  <!-- ======= Contact Section ======= -->
  <section id="hubungi" class="contact mt-5" style="min-height: 90vh;">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Login</h2>
        <p>Masukkan data akun anda</p>
      </div>
      <div class="row">        
        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <form action="/postlogin" method="post" role="form" class="form-login">
            @csrf            
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" data-rule="email" data-msg="Tuliskan alamat email yang terdaftar!" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Tuliskan Password anda!" />
              <div class="validate"></div>
              </div>              
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Berhasil masuk, anda akan diarahkan ke client area.</div>
            </div>
            <div class="text-center"><button type="submit">Masuk</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
@endsection

@section('footer')
<script src="{{asset('landing')}}/js/login.js"></script>
@endsection