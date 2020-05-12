@extends('layouts.appuser')

@section('kontenluas')
<h3>Sekolah Terdaftar</h3><hr>
@if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
@endif
<a href="/home/userTambahSekolah" class="btn btn-primary">Tambah Data Sekolah</a><br><br>
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
                <a href="/home/userEditSekolah/{{ $sklh['id_sekolah'] }}" class="badge badge-success">Edit</a>
                <a href="/home/userDetailSekolah/{{ $sklh['id_sekolah'] }}" class="badge badge-info">Detail</a>
                <a href="/home/userDeleteSekolah/{{ $sklh['id_sekolah'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $sklh['nama_sekolah'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
