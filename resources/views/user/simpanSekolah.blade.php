@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #3490dc ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
    <h5 class="card-title">{{ $data->nama_sekolah }}</h5>
        <p class="card-text">
            <b>Alamat Sekolah : </b>{{ $data->alamat_sekolah }} <br>
            <b>Kota Kabupaten : </b> {{ $data->kota_kabupaten }} <br>
            <b>Provinsi : </b> {{ $data->provinsi }} <br>
        </p>
        <a href="/home/sekolahuser" class="btn btn-primary">Kembali ke Daftar Sekolah</a>
    </div>
  </div>
@endsection
