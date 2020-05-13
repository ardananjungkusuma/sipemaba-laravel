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

Route::get('/', 'SekolahController@index');
Route::get('/sekolah', 'SekolahController@getSekolah');
Route::get('/sipemaba/informasi', 'SipemabaController@informasi');
Route::get('/sekolah/detailSekolah/{id}', 'SekolahController@detailSekolah');
Route::get('/pendaftaran/cariPendaftaranView', 'PendaftaranController@cariPendaftaranView');
Route::post('/pendaftaran/cariPendaftar', 'PendaftaranController@cariPendaftar');
Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/sekolahuser', 'HomeController@userGetSekolah');
Route::get('/home/userDetailSekolah/{id}', 'HomeController@detailSekolah');
Route::get('/home/userTambahSekolah', 'HomeController@tambahSekolah');
Route::post('/home/userSimpanSekolah', 'HomeController@simpanSekolah');
Route::get('/home/userDeleteSekolah/{id}', 'HomeController@userDeleteSekolah');
Route::get('/home/userEditSekolah/{id}', 'HomeController@userEditSekolah');
Route::post('/home/userUpdateSekolah', 'HomeController@userUpdateSekolah');
Route::get('/home/siswa', 'HomeController@userGetSiswa');
Route::get('/home/userDetailSiswa/{id}', 'HomeController@detailSiswa');
Route::get('/home/userTambahSiswa', 'HomeController@tambahSiswa');
Route::post('/home/userSimpanSiswa', 'HomeController@simpanSiswa');
Route::get('/home/userEditSiswa/{id}', 'HomeController@userEditSiswa');
Route::post('/home/userUpdateSiswa', 'HomeController@userUpdateSiswa');
Route::get('/home/userDeleteSiswa/{id}', 'HomeController@userDeleteSiswa');
Route::get('/home/userTambahPendaftaran', 'HomeController@tambahPendaftaran');
Route::post('/home/userSimpanPendaftaran', 'HomeController@simpanPendaftaran');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
