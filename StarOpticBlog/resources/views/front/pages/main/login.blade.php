@extends('layouts.front.mainlayout')
@section('title') Prijavi se @endsection
@section('pagedescription') Page Description 1 @endsection
@section('keywords') staroptic,korisnik,log-in,prijava @endsection
@section('content')
    <div class="container-fluid d-flex auth py-5 justify-content-center align-items-center">
    <div class="login-form w-50">
        <form action="{{route("loginUser")}}" method="post">
            @csrf
            <h2 class="text-center pb-3">Prijavi se</h2>
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('username') ? 'novalid' :  session('sent')}}" placeholder="Korisničko ime" name="username" value="{{old("username")}}">
                @error('username')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control {{$errors->has('password') ? 'novalid' :  session('sent')}}" placeholder="Lozinka" name="password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Prijavi se</button>
            </div>
            <div class="form-group text-center">
                <p class="pt-2"><a href="{{route('register')}}">Napravi nalog</a></p>
                <p><a href="{{route('password.request')}}" class="">Zaboravio/la sam lozinku?</a></p>
            </div>
        </form>
        @if(Session::has('fail'))
            <div class="alert alert-danger text-center">{{Session::get('fail')}}</div>
        @endif
    </div>
    </div>
@endsection
