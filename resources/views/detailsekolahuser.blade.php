@extends('layouts.appuser')

@section('kontenluas')
<h3>Detail Sekolah</h3><hr>
<table class="table table-bordered">
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
