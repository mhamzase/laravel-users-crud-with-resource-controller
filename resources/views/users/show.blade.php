@extends('layout')




@section('content')

    <div class="container my-5 mx-auto col-6">
        <ul class="list-group">
            <a href="{{ route('users.index') }}" class="btn btn-secondary col-3 mb-3 ">Back to List</a>

            <li class="list-group-item d-flex justify-content-between">
                <span class="badge bg-dark text-white p-3">{{ $user->name }}</span>
                <span class="badge bg-dark text-white p-3">{{ $user->email }}</span>
            </li>
        </ul>
    </div>


@endsection
