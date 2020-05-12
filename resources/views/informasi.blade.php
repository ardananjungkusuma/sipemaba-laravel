@extends('indexmaster')
@extends('layouts.app')
@section('title','Sekolah')

@section('kontenluas')
<h3>Informasi Mengenai SIPEMABA</h3><hr>
<div class="alert alert-warning" role="alert">
    Seluruh Data Mengenai Pendaftaran Mahasiswa Baru di Website Ini Diambil Menggunakan <b>API</b> <br>
    <a href="https://en.wikipedia.org/wiki/Application_programming_interface" style="text-decoration: none">Read More About API</a>
</div>
<div class="col-md-10">
    <div class="card">
        <div class="card-header" style="background-color: #d9edf7;color:#31708f">
          Jadwal Seleksi Penerimaan Mahasiswa Baru
        </div>
        <div class="card-body">
          <p class="card-text">
           <b>Periode pendaftaran oleh siswa pelamar :</b>14-27 Februari 2021 <br>
            <b>Periode melengkapi pendaftaran oleh siswa pelamar : </b>14-27 Desember 2020 <br>
            <b>Finalisasi pendaftaran oleh siswa : </b>	14-27 Februari 2021 <br>
            <b>Periode pencetakan kartu peserta SIPEMABA : </b>	14-27 Februari 2021 <br>
            <b>Pengumuman hasil seleksi SIPEMABA : </b>	8 April 2021<br>
          </p>
        </div>
      </div>
</div>
@endsection
