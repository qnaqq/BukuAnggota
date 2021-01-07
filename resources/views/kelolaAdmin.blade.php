@extends('app')
@section('title')
Kelola Admin
@endsection

@section('profile')
<i class="ri-user-line"></i>
<p>Username</p>
@endsection

@section('content')

<a href="/admin/manage/createAdmin"><button type="button" class="btn btn-info">Tambah Admin</button></a>
@if (session('pesan'))
    <div class="alert alert-success mt-3">
      {{ session('pesan') }}
    </div>
@endif

@if (session('pesan1'))
    <div class="alert alert-warning mt-3">
      {{ session('pesan1') }}
    </div>
@endif

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>  
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $admins as $adm )
    <tr>
      <td>{{ $adm->id }}</td>
      <td>{{ $adm->email }}</td>
      <td>{{ $adm->username }}</td>
      <td>
          <a href="/admin/manage/{{ $adm->id }}"><button type="button" class="btn btn-primary"><i class="ri-eye-line"></i></button></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection