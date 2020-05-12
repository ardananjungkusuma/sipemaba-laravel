@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Siswa Baru</h3><hr>
<form action="/home/userSimpanSiswa" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Siswa</label>
        <input type="text" class="form-control" name="nama_siswa" required placeholder="Masukan Nama Siswa">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NISN Siswa</label>
        <input type="text" class="form-control" name="nisn" required placeholder="Masukan NISN Siswa">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat Siswa</label>
        <input type="text" class="form-control" name="alamat_siswa" required placeholder="Masukan Alamat Lengkap">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Rata Rata UN</label>
        <input type="text" class="form-control" name="rata_rata_un" required placeholder="Masukan Rata Rata Un">
      </div>
      <small>* Contoh <b>39.31</b> (Menggunakan Titik)</small><br>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Sekolah</label>
        <select class="form-control" name="id_sekolah" required>
            <optgroup label="Pilih Sekolah Siswa">
            @foreach($sekolah as $sklh)
                <option value="{{ $sklh['id_sekolah']}}">{{ $sklh['nama_sekolah'] }}</option>
            @endforeach
            </optgroup>
        </select>
      </div>

    <input type="submit" value="Tambah Data" class="btn btn-primary">
</form>
@endsection
