@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Sekolah Baru</h3><hr>
<form action="/home/userSimpanSekolah" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Sekolah</label>
        <input type="text" name="nama_sekolah" required class="form-control" placeholder="Masukan Nama Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat Sekolah</label>
        <input type="text" class="form-control" name="alamat_sekolah" placeholder="Masukan Alamat Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kota Kabupaten</label>
        <input type="text" class="form-control" name="kota_kabupaten" placeholder="Masukan Kota Kabupaten Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Provinsi</label>
        <input type="text" class="form-control" name="provinsi" placeholder="Masukan Provinsi Sekolah">
      </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary">
</form>
@endsection
