@extends('indexmaster')
@extends('layouts.app')
@section('title','Sekolah')

@section('kontenluas')
<h3>Cari Data Pendaftaran Menggunakan NISN</h3><hr>
<form action="/pendaftaran/cariPendaftar" method="POST" class="form-inline my-2 my-lg-0">
    {{ csrf_field() }}
    <input class="form-control mr-sm-2" type="text" name="nisn" placeholder="Ketik NISN disini">
    <input class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="Cari Pendaftaran">
</form>
<small>*Data NISN bisa anda cari di <a href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama">Disini</a></small>
@endsection
