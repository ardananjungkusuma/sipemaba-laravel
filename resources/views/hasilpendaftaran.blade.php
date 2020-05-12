@extends('indexmaster')
@extends('layouts.app')
@section('title','Sekolah')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #007bff;color:white">Hasil Pendaftaran Anda</h5>
    <div class="card-body">
        @foreach($hasilpendaftaran as $hsl)
    <h5 class="card-title">{{ $hsl['nama_siswa'] }}</h5>
        <p class="card-text">
            <b>NISN: </b>{{ $hsl['nisn'] }} <br>
            <b>Rata Rata UN : </b> {{ $hsl['rata_rata_un'] }} <br>
            <b>Pilihan PTN : </b> {{ $hsl['perguruan_tinggi'] }} <br>
            <b>Pilihan Jurusan : </b> <br>
            1. {{ $hsl['jurusansatu'] }} <br>
            2. {{ $hsl['jurusandua'] }} <br>
            <b>Status Penerimaan : </b> {{ $hsl['status_penerimaan'] }}
        </p>
        <a href="/pendaftaran/cariPendaftaranView" class="btn btn-primary">Kembali ke Pencarian</a>
        @endforeach
    </div>
  </div>
@endsection
