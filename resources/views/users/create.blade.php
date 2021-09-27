@extends('layout')


@section('content')

    <div class="container mx-auto my-5 col-5">
      <a href="{{ route('users.index') }}" class="btn btn-secondary col-3 mb-3 ">Back to List</a>

        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{old('name')}}">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                
                <input type="email" name="email" class="form-control " id="email" aria-describedby="email"
                    placeholder="Enter email" value="{{old('email')}}">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror

                <input type="password" name="password" class="form-control " id="password" aria-describedby="password"
                    placeholder="Enter password" value="{{old('password')}}">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-dark my-2">Submit</button>
        </form>
    </div>


@endsection
