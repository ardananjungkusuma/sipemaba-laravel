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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
