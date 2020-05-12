@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit Sekolah</h3><hr>
<form action="/home/userUpdateSekolah" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Sekolah</label>
        <input type="hidden" name="id_sekolah" value="{{ $sekolah['id_sekolah'] }}"required class="form-control" placeholder="Masukan Nama Sekolah">
        <input type="text" name="nama_sekolah" value="{{ $sekolah['nama_sekolah'] }}"required class="form-control" placeholder="Masukan Nama Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat Sekolah</label>
        <input type="text" class="form-control" value="{{ $sekolah['alamat_sekolah'] }}" name="alamat_sekolah" placeholder="Masukan Alamat Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kota Kabupaten</label>
        <input type="text" class="form-control" value="{{ $sekolah['kota_kabupaten'] }}" name="kota_kabupaten" placeholder="Masukan Kota Kabupaten Sekolah">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Provinsi</label>
        <input type="text" class="form-control" value="{{ $sekolah['provinsi'] }}" name="provinsi" placeholder="Masukan Provinsi Sekolah">
      </div>
    <input type="submit" value="Edit Data" class="btn btn-primary">
</form>
@endsection
