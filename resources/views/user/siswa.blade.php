@extends('layouts.appuser')

@section('kontenluas')
<h3>Siswa Terdaftar</h3><hr>
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
@endif
@if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
@endif
<a href="/home/userTambahSiswa" class="btn btn-primary">Tambah Data Siswa</a><br><br>
<table class="table table-bordered" id="listSiswa">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach($siswa as $siswa)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $siswa['nisn'] }}</td>
            <td>{{ $siswa['nama_siswa'] }}</td>
            <td>
                <a href="/home/userEditSiswa/{{ $siswa['id_siswa'] }}" class="badge badge-success">Edit</a>
                <a href="/home/userDetailSiswa/{{ $siswa['id_siswa'] }}" class="badge badge-info">Detail</a>
                <a href="/home/userDeleteSiswa/{{ $siswa['id_siswa'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $siswa['nama_siswa'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
