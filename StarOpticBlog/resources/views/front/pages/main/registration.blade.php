@extends('layouts.front.mainlayout')
@section('title') Registracija @endsection
@section('pagedescription') Page Description 1 @endsection
@section('keywords') staroptic,korisnik,registration,registracija @endsection
@section('content')
    <div class="container-fluid d-flex auth py-5 justify-content-center align-items-center">
        <div class="login-form w-50">
            <form action="{{route("registerUser")}}" method="post">
                @csrf
                <h2 class="text-center pb-1">Registracija</h2>
                <p class="text-center pb-2">Sva polja su obavezna</p>
                <div class="form-group">
                    <input type="text" class="form-control {{$errors->has('firstname') ? 'novalid' :  session('sent')}}" placeholder="Ime" name="firstname" value="{{old("firstname")}}">
                    @error('firstname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control {{$errors->has('lastname') ? 'novalid' :  session('sent')}}" placeholder="Prezime" name="lastname" value="{{old("lastname")}}">
                    @error('lastname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control {{$errors->has('username') ? 'novalid' :  session('sent')}}" placeholder="Korisničko ime" name="username" value="{{old("username")}}">
                    @error('username')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control {{$errors->has('email') ? 'novalid' :  session('sent')}}" placeholder="Email" name="email" value="{{old("email")}}">
                    @error('email')
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
                    <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'novalid' :  session('sent')}}" placeholder="Potvrdite lozinku" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Napravi nalog</button>
                </div>
                <div class="form-group text-center">
                    <p class="pt-2"><a href="{{route('login')}}">Uloguj se</a></p>
                </div>
            </form>

            @if(Session::has('success'))
                <div class="alert alert-success text-center pt-2">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger text-center pt-2">{{Session::get('fail')}}</div>
            @endif
        </div>
    </div>
@endsection
