@extends('app')
@section('title')
Detail Anggota
@endsection

@section('content')

<div class="container">
  @yield('action')
</div>

<table class="table">
    <tbody>
      <tr>
        <th scope="row">Nama</th>
        <td>{{ $member->nama }}</td>
      </tr>
      <tr>
        <th scope="row">NIM</th>
        <td>{{ $member->nim }}</td>
      </tr>
      <tr>
        <th scope="row">Fakultas</th>
        <td>{{ $member->fakultas }}</td>
      </tr>
      <tr>
        <th scope="row">Program Studi</th>
        <td>{{ $member->prodi }}</td>
      </tr>
      <tr>
        <th scope="row">Angkatan</th>
        <td>{{ $member->angkatan }}</td>
      </tr>
      <tr>
        <th scope="row">Lulusan</th>
        <td>{{ $member->lulusan }}</td>
      </tr>
      <tr>
        <th scope="row">Sejak Kapan</th>
        <td>{{ $member->sejak }}</td>
      </tr>
      <tr>
        <th scope="row">Alasan</th>
        <td>{{ $member->alasan }}</td>
      </tr>
    </tbody>
  </table>

@endsection