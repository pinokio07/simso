@extends('layouts.client.master')
@section('header')
  <title>Simso | Ganti Password</title>
  <style>
    .validate{
      color: red;
      font-size: 10pt;
    }
  </style>
@endsection
@section('content')
<!-- ======= About Section ======= -->
<section id="tentang" class="about mt-5" style="min-height: 90vh;">
  <div class="container-fluid">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2>{{(!$user->email_verified_at) ? 'Buat' : 'Ganti'}} Password</h2>
      <p>
        @if (!$user->email_verified_at)
        <small>Massukan password untuk pertama kali.</small>
        @else
        <small>Ganti password anda.</small>
        @endif
      </p>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
        <img src="{{asset('/img/userDefault.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-xl-4 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <form id="gantipassword" action="/postgantipassword" method="POST" autocomplete="off" role="form">    
          @csrf    
          <div class="form-group">
            <label for="passwordBaru">Password</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-eye"></i>
                  <i class="fas fa-eye-slash d-none"></i>
                </div>
              </div>
              <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" placeholder="Tuliskan Password" autocomplete="off">              
            </div>  
            <div class="validate"></div>          
          </div>
          <div class="form-group">
            <label for="passwordKonfirmasi">Konfirmasi Password</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-eye"></i>
                  <i class="fas fa-eye-slash d-none"></i>
                </div>
              </div>
              <input type="password" class="form-control" id="passwordKonfirmasi" placeholder="Tuliskan Ulang Password" name="password" autocomplete="off">              
            </div> 
            <div class="validate"></div>
          </div>
          <button type="submit" class="btn btn-primary shadow-sm">Simpan</button>
          @if ($user->email_verified_at != '')
          <a href="/user-profile" class="btn btn-warning shadow-sm">Batal</a>
          @endif
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->  
<div id="hasil"></div>  
@endsection
@section('footer')
<script>
  jQuery(document).ready(function(){
    $('.fa-eye').click(function(){
      var inp = $(this).parent().parent().next('.form-control');      
      inp.get(0).type = 'text';      
      $(this).addClass('d-none');
      $(this).next('.fa-eye-slash').removeClass('d-none');
    });
    $('.fa-eye-slash').click(function(){
      var inp = $(this).parent().parent().next('.form-control');
      inp.get(0).type = 'password';      
      $(this).addClass('d-none');
      $(this).prev('.fa-eye').removeClass('d-none');
    });

    $(document).on('submit', '#gantipassword', function(e){      
      e.preventDefault();
      var pass = $('#passwordBaru');
      var konfirmPass = $('#passwordKonfirmasi');

      // alert(pass.val());
      if (pass.val().length < 4) {
        pass.parent().next('.validate').html('Password minimal 4 karakter.').slideDown();
        return false;
      } else {
        pass.parent().next('.validate').html('Password minimal 4 karakter.').slideUp();
      }

      if (konfirmPass.val() != pass.val()) {
        konfirmPass.parent().next('.validate').html('Password konfirmasi harus sama dengan Password.').slideDown();
        return false;
      }
      
      var str = $(this).serialize();
      var this_form = $(this);
      var action = $(this).attr('action');
      
      $.ajax({
        type: "POST",
        url: action,
        data: str,
        success: function(msg) {
          if (msg.gagal === true) {
            $('#hasil').html('Password konfirmasi harus sama dengan Password');
          }          
          window.location="/clientarea";
        }
      });

      return false;
      
    });
  });
</script>
@endsection