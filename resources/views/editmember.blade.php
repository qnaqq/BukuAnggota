@extends('app')
@section('title')
Edit Data Anggota
@endsection

@section('content')
<div class="container">
    <h2 class="my-3">Edit Data Anggota</h2>

    <form method="POST" action="/admin/showbukuanggotaadmin/{{ $member->id }}">
        @method('patch')
        @csrf
        <div class="form-row mb-3">
            <div class="col">
                <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $member->nama }}" required>
            </div>
            <div class="col">
                <input name="nim" type="text" class="form-control" placeholder="NIM" value="{{ $member->nim }}">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="fakultas" type="text" class="form-control" placeholder="Fakultas" value="{{ $member->fakultas }}" required>
            </div>
            <div class="col">
                <input name="prodi" type="text" class="form-control" placeholder="Program Studi" value="{{ $member->prodi }}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label>Angkatan</label>
                <input name="angkatan" type="number" class="form-control" placeholder="Angkatan Tahun" value="{{ $member->angkatan }}" required>
            </div>
            <div class="col">
                <label>Lulusan</label>
                <input name="lulusan" type="number" class="form-control" placeholder="Lulusan Tahun" value="{{ $member->lulusan }}">
            </div>
        </div>
        <div class="form-group mt-3">
            <label>Sejak kapan mengikuti Tapak Suci</label>  
            <input name="sejak" class="form-control" type="text" value="{{ $member->sejak }}" required>
            <label>Alasan kenapa memilih Tapak Suci</label>  
            <input value="{{ $member->alasan }}" name="alasan" class="form-control" rows="3" placeholder="Alasan" required>
        </div>

        <button type="submit" class="btn btn-success">Ubah Data</button>
    </form>
</div>

@endsection