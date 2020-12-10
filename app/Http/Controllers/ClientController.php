<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Str;
use DB;

class ClientController extends Controller
{
    public function index()
    {
      $user = auth()->user();      
      $siswa = 0;
      $guru = 0;
      $kelas = 0;
      $jurusan = 0;
      if ($user->pelanggan()->exists() && $user->pelanggan->nama_db != '') {
        Config::set('database.connections.client', [
          'driver' => 'mysql',
          'host' => env('DB_HOST', 'localhost'),
          'port' => env('DB_PORT', '3306'),
          'database'  => $user->pelanggan->nama_db,
          'username' => env('DB_USERNAME', $user->pelanggan->user_db),
          'password' => env('DB_PASSWORD', $user->pelanggan->pass_db),
          'charset'   => 'utf8',
          'collation' => 'utf8_unicode_ci',
          'prefix'    => '',
          'strict'    => false,
          ]);

        DB::purge('client');
        DB::reconnect('client');

        $siswa = DB::connection('client')->table('siswa')->count();
        $guru = DB::connection('client')->table('guru')->count();
        $kelas = DB::connection('client')->table('kelas')->count();
        $jurusan = DB::connection('client')->table('jurusan')->count();
      }
      return view('pages.user.client', compact(['user', 'siswa', 'guru', 'kelas', 'jurusan']));
    }

    public function profile()
    {
      $user = auth()->user();
      return view('pages.user.profile', compact(['user']));
    }

    public function updateprofile(Request $request)
    {
      // dd($request->all());
      $user = auth()->user();
      $pelanggan = $user->pelanggan;
      $pelanggan->nama = $request->nama;
      $pelanggan->telepon = $request->telepon;
      $pelanggan->save();
      if ($request->hasFile('avatar')) {
        $filelama = public_path().'/img/user/'.$pelanggan->avatar;
        if (!is_dir($filelama) && file_exists($filelama)) {
          unlink($filelama);
        }

        $ext = $request->file('avatar')->getClientOriginalExtension();
        $nama = Str::slug($pelanggan->nama).'_'.round(microtime(true)).'.'.$ext;
        $request->file('avatar')->move('img/user/', $nama);
        $pelanggan->avatar = $nama;
        $pelanggan->save();
      }

      return "OK";
    }

    public function updatesekolah(Request $request)
    {
      $user = auth()->user();
      $pelanggan = $user->pelanggan;
      $pelanggan->sekolah = $request->sekolah;
      $pelanggan->telepon_sekolah = $request->telepon_sekolah;
      $pelanggan->alamat = $request->alamat;
      $pelanggan->kota = $request->kota;
      $pelanggan->provinsi = $request->provinsi;
      $pelanggan->kode_pos = $request->kode_pos;
      $pelanggan->save();
      if ($request->hasFile('logo_sekolah')) {
        $filelama = public_path().'/img/logo/'.$pelanggan->logo_sekolah;
        if (!is_dir($filelama) && file_exists($filelama)) {
          unlink($filelama);
        }

        $ext = $request->file('logo_sekolah')->getClientOriginalExtension();
        $nama = Str::slug($pelanggan->sekolah).'_'.round(microtime(true)).'.'.$ext;
        $request->file('logo_sekolah')->move('img/logo/', $nama);
        $pelanggan->logo_sekolah = $nama;
        $pelanggan->save();
      }
      return "OK";
    }
}
