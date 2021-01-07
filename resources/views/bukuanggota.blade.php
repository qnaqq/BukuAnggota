@extends('app')
@section('title')
Buku Anggota
@endsection

@section('btn-login')
<div class="container text-right">
    <a href="{{ url('/admin') }}"><button type="button" class="btn btn-success">Login Admin</button></a>
</div>
@endsection

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Fakultas</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $members as $mem )
    <tr>
      <td>{{ $mem->nama }}</td>
      <td>{{ $mem->nim }}</td>
      <td>{{ $mem->fakultas }}</td>
      <td>{{ $mem->prodi }}</td>
      <td><a href="/bukuanggota/showbukuanggota/{{ $mem->id }}"><button type="button" class="btn btn-primary"><i class="ri-eye-line"></i></button></a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection