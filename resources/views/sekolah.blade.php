@extends('indexmaster')
@extends('layouts.app')
@section('title','Sekolah')

@section('kontenluas')
{{-- <a href="/sekolah/tambah" class="btn btn-primary">Tambah Data Sekolah</a> --}}
<h3>Sekolah Terdaftar</h3><hr>
<table class="table table-bordered" id="listSekolah">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Sekolah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach($sekolah as $sklh)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $sklh['nama_sekolah'] }}</td>
            <td>
                <a href="/sekolah/detailSekolah/{{ $sklh['id_sekolah'] }}" class="badge badge-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
