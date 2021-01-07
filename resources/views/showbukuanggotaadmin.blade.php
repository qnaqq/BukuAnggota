@extends('showbukuanggota')

@section('action')
    <a href="{{ $member->id }}/editmember"><button type="button" class="btn btn-primary">Edit</button></a>
    <form action="{{ $member->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection