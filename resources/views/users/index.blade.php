@extends('layout')




@section('content')

    <div class="container my-5 mx-auto col-6">
        <ul class="list-group">
            <a href="{{ route('users.create') }}" class="btn btn-dark col-4 mb-3">Create new user</a>
            @foreach ($users as $user)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $user->name }} - {{ $user->email }}</span>
                    <div>
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                        <form action="{{ route('users.destroy', $user) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
