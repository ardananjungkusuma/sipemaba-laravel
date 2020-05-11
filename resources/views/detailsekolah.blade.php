@extends('master')
@extends('layouts.app')
@section('title','Sekolah')

@section('judul_halaman','Detail Data Sekolah')

@section('konten')
<a href="/sekolah" class="btn btn-primary">Kembali ke Daftar Sekolah</a>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <th>Nama Sekolah</th>
        <th>Alamat</th>
        <th>Kota Kabupaten</th>
        <th>Provinsi</th>
    </thead>
    <tbody>
        @foreach($sekolah as $sklh)
        <tr>
            <td>{{ $sklh['nama_sekolah'] }}</td>
            <td>{{ $sklh['alamat_sekolah'] }}</td>
            <td>{{ $sklh['kota_kabupaten'] }}</td>
            <td>{{ $sklh['provinsi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
