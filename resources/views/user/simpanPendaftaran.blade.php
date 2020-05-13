@extends('layouts.appuser')

@section('kontenluas')
@if ($message = Session::get('success'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
@endif
<div class="card">
    <h5 class="card-header" style="background-color: #3490dc ;color:white">Untuk Jadwal Pengumuman Bisa Cek Di Menu Informasi</h5>
    <div class="card-body">
        <p class="card-text">
            <b>Perguruan Tinggi : </b>{{ $data->perguruan_tinggi }} <br>
            <b>Jurusan Satu : </b> {{ $data->jurusansatu }} <br>
            <b>Jurusan Dua : </b> {{ $data->jurusandua }} <br>
        </p>
        <a href="/home/userTambahPendaftaran" class="btn btn-primary">Kembali ke Tambah Pendaftaran</a>
    </div>
  </div>
@endsection
