@extends('layouts.appuser')

@section('kontenluas')
<h3>Detail Siswa</h3><hr>
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
@endif
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Alamat</th>
        <th>Rata Rata UN</th>
        <th>Asal Sekolah</th>
    </thead>
    <tbody>
        @foreach($siswa as $siswa)
        <tr>
            <td>{{ $siswa['nisn'] }}</td>
            <td>{{ $siswa['nama_siswa'] }}</td>
            <td>{{ $siswa['alamat_siswa'] }}</td>
            <td>{{ $siswa['rata_rata_un'] }}</td>
            <td>{{ $siswa['nama_sekolah'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
