@extends('master')
@extends('layouts.app')
@section('title','Sekolah')

@section('judul_halaman','Data Sekolah')

@section('konten')
{{-- <a href="/sekolah/tambah" class="btn btn-primary">Tambah Data Sekolah</a> --}}
<br><br>
<table class="table">
    <thead class="thead-dark">
        <th>Nama Sekolah</th>
        <th>Kota Kabupaten</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach($sekolah as $sklh)
        <tr>
            <td>{{ $sklh['nama_sekolah'] }}</td>
            <td>{{ $sklh['kota_kabupaten'] }}</td>
            <td>
                <a href="/sekolah/detailSekolah/{{ $sklh['id_sekolah'] }}" class="badge badge-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
