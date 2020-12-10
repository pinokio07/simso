<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
  public function login()
  {
    return view('pages.login');
  }

  public function postlogin(Request $request)
  {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      return "OK";
    }
    return "Email/Password tidak terdaftar.";
  }
  public function verifikasi(Request $request, $genpass)
  {
    $email = $request->from;
    $password = $genpass;

    if (Auth::attempt(['email' => $email, 'password' => $password])) {
      if (auth()->user()->email_verified_at != '') {
        return redirect('/clientarea');
      }
      return redirect('/gantipassword');
    }
    return redirect('/');
  }

  public function gantipassword()
  {
    $user = auth()->user();

    return view('pages.user.gantipassword', compact(['user']));
  }

  public function postgantipassword(Request $request)
  {
    if ($request->passwordBaru != $request->password) {
      return response()->json(['gagal'=>true]);
    }
    $user = auth()->user();
    $user->password = bcrypt($request->password);
    $user->email_verified_at = \Carbon\Carbon::now();
    $user->save();    
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
}
