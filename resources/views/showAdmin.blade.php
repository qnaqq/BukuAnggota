@extends('app')
@section('title')
Kelola Admin
@endsection

@section('content')
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $manage->email }}</td>
            </tr>
            <tr>
                <th scope="row">Username</th>
                <td>{{ $manage->username }}</td>
            </tr>
        </tbody>
    </table>

    <form action="{{ $manage->id }}" method="POST">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection