@extends('app')
@section('title')
Admin
@endsection

@section('profile')
<i class="ri-user-line"></i>
<p>Username</p>
@endsection

@section('content')

<a href="{{ url('/admin/createbukuanggota') }}"><button type="button" class="btn btn-success">Tambah Anggota</button></a>

<a href="{{ url('/admin/manage') }}"><button type="button" class="btn btn-info">Kelola Admin</button></a>

@if (session('pesan'))
    <div class="alert alert-success">
      {{ session('pesan') }}
    </div>
@endif

@if (session('pesan1'))
    <div class="alert alert-danger mt-3">
      {{ session('pesan1') }}
    </div>
@endif

@if (session('pesan2'))
<div class="alert alert-warning mt-3">
  {{ session('pesan2') }}
</div>
@endif

<table class="table mt-3">
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
      <td><a href="/admin/showbukuanggotaadmin/{{ $mem->id }}"><button type="button" class="btn btn-primary"><i class="ri-eye-line"></i></button></a></td>
    </tr>
  @endforeach
  </tbody>
</table>



@endsection