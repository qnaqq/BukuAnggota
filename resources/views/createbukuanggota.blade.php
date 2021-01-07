@extends('app')
@section('title')
Tambah Anggota
@endsection

@section('content')
<div class="container">
    <h2 class="my-3">Tambah Anggota</h2>
    <form method="POST" action="/bukuanggota">
        @csrf
        <div class="form-row mb-3">
            <div class="col">
                <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
            </div>
            <div class="col">
                <input name="nim" type="text" class="form-control" placeholder="NIM" value="{{ old('nim') }}">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="fakultas" type="text" class="form-control" placeholder="Fakultas" value="{{ old('fakultas') }}" required>
            </div>
            <div class="col">
                <input name="prodi" type="text" class="form-control" placeholder="Program Studi" value="{{ old('prodi') }}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label>Angkatan</label>
                <input name="angkatan" type="number" class="form-control" placeholder="Angkatan Tahun" value="{{ old('angkatan') }}" required>
            </div>
            <div class="col">
                <label>Lulusan</label>
                <input name="lulusan" type="number" class="form-control" placeholder="Lulusan Tahun" value="{{ old('lulusan') }}">
            </div>
        </div>
        <div class="form-group mt-3">
            <label>Sejak kapan mengikuti Tapak Suci</label>  
            <input name="sejak" class="form-control" type="text" value="{{ old('sejak') }}" required>
            <label>Alasan kenapa memilih Tapak Suci</label>  
            <textarea name="alasan" class="form-control" rows="3" placeholder="Alasan" value="{{ old('alasan') }}" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Tambah Data</button>
    </form>
</div>

@endsection