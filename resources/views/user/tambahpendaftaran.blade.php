@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Pendaftaran PTN untuk Siswa</h3><hr>
<form action="/home/userSimpanPendaftaran" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlSelect1">Siswa</label>
            <select class="form-control" name="id_siswa" required>
                <optgroup label="Pilih Siswa">
                    @foreach($siswa as $sis)
                        <option value="{{ $sis['id_siswa']}}">{{ $sis['nama_siswa'] }}</option>
                    @endforeach
                </optgroup>
            </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Perguruan Tinggi</label>
        <input type="text" class="form-control" name="perguruan_tinggi" required placeholder="Masukan Nama PTN">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jurusan 1</label>
        <input type="text" class="form-control" name="jurusansatu" required placeholder="Masukan Jurusan 1">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jurusan 2</label>
        <input type="text" class="form-control" name="jurusandua" required placeholder="Masukan Jurusan 2">
      </div>
      <small>*Jurusan 2 digunakan untuk cadangan jika jurusan 1 tidak diterima atau tidak lolos.</small><br><br>
    <input type="submit" value="Daftarkan Siswa" class="btn btn-primary">
</form>
@endsection
