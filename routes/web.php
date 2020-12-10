<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/daftar', [\App\Http\Controllers\DaftarController::class, 'daftar']);
Route::get('/verify/{genpass}', [\App\Http\Controllers\UserController::class, 'verifikasi']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/postlogin', [\App\Http\Controllers\UserController::class, 'postlogin']);

Route::group(['middleware' => 'auth'], function(){
  Route::get('/clientarea/logout', [\App\Http\Controllers\UserController::class, 'logout']);
  Route::get('/gantipassword', [\App\Http\Controllers\UserController::class, 'gantipassword']);
  Route::post('/postgantipassword', [\App\Http\Controllers\UserController::class, 'postgantipassword']);
  Route::get('/clientarea', [\App\Http\Controllers\ClientController::class, 'index']);
  Route::get('/user-profile', [\App\Http\Controllers\ClientController::class, 'profile']);
  Route::post('/postupdateprofile', [\App\Http\Controllers\ClientController::class, 'updateprofile']);
  Route::post('/postupdatesekolah', [\App\Http\Controllers\ClientController::class, 'updatesekolah']);
});
