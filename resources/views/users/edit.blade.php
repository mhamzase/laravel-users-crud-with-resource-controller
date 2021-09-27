@extends('layout')


@section('content')

    <div class="container mx-auto my-5 col-5">
      <a href="{{ route('users.index') }}" class="btn btn-secondary col-3 mb-3 ">Back to List</a>

        <form action="{{ route('users.update',$user) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$user->name}}">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                
                <input type="email" name="email" class="form-control " id="email" aria-describedby="email"
                    placeholder="Enter email" value="{{$user->email}}">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-dark my-2">Update</button>
        </form>
    </div>


@endsection
