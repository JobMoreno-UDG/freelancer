@extends('layaout.plantilla')
@section('title', 'Login')

@section('content')
    <form class="form" action="{{route('auth.store')}}" method="post">
        @csrf
        <label class="form-control" for="user">User</label>
        <input class="form-control" type="text" name="user" id="user">
        @error('user')        
        <small>{{$message}}</small>
        <br>
        @enderror
        <label class="form-control" for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password">
        @error('password')        
        <small>{{$message}}</small>
        <br>
        @enderror
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-outline-dark  btn-sm" type="submit">Iniciar Sesión</button>
        </div>
    </form>
@endsection()