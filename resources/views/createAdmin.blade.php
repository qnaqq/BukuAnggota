@extends('app')
@section('title')
Tambah Admin
@endsection

@section('content')
<div class="container">
    <h2 class="my-3">Tambah Anggota</h2>
    <form method="POST" action="/admin/manage">
        @csrf
        <div class="form-group">
            <label>E-mail</label>
            <input name="email" class="form-control mb-2" type="text" placeholder="E-mail" value="{{ old('email') }}" required>
            <label>Username</label>
            <input name="username" class="form-control mb-2" type="text" placeholder="Username" value="{{ old('username') }}" required>
            <label>Password</label>
            <input name="password" class="form-control mb-2" type="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah Data</button>
    </form>
</div>

@endsection