<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Mail;

class DaftarController extends Controller
{
    public function daftar(Request $request)
    {
      //Ambil Data Request
      $name = $request->name;
      $email = $request->email;
      $sekolah = $request->sekolah;
      $telepon = $request->telepon;
      $status = $request->status;
      $pesan = $request->message;
      //Cek if Email sudah terdaftar
      if (\App\Models\User::where('email', $email)->first()) {
        return "Email sudah terdaftar.";
      } else {
        //generate password
        $genpass = Str::random(25);
        //Data untuk email
        $data = array('name'=>$name, 'genpass' => $genpass, 'email' => $email);
        //Kirim Email
        Mail::send('mails.verify', $data, function($message) use ($name, $email) {
          $message->to($email, $name)->subject('Verifikasi Email untuk Simso');
          $message->from('infosimso@simso.id','noreply');
        }); 
        if(count(Mail::failures()) > 0){
          $errors = 'Failed to send email, please try again.';
          return $errors;
        } else {
          //Buat User
          $user = new \App\Models\User;
          $user->username = Str::slug($name);
          $user->email = $email;
          $user->password = bcrypt($genpass);
          $user->save();
          //Buat Pelanggan
          $pelanggan = new \App\Models\Pelanggan;
          $pelanggan->nama = $name;
          $pelanggan->user_id = $user->id;
          $pelanggan->sekolah = $sekolah;
          $pelanggan->telepon = $telepon;
          $pelanggan->status = $status ?? 'gratis';
          $pelanggan->save();
          
          return "OK";
        }        
      }
    }   
}
