@extends('app')
@section('title')
UKMO Tapak Suci UNEJ
@endsection

@section('btn-login')
@endsection

@section('content')
<div class="jumbotron text-light">
  <h1 class="display-4">UKMO Tapak Suci Universitas Jember</h1>
  <p class="lead">merupakan Unit Kegiatan Mahasiswa Olahraga di bidang Seni Beladiri Tradisional Pencak Silat<br>yang berada di bawah naungan Universitas Jember dan Tapak Suci Pimpinan Daerah 04 Jember</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="{{ url('/bukuanggota') }}">Buku Anggota</a>
  </p>
</div>
@endsection