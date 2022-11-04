@extends('layouts.front.resetpassword')
@section('title') Reset Lozinke @endsection
@section('pagedescription') Page Description 1 @endsection
@section('keywords') staroptic,lozinka,reset @endsection
@section('content')
    <div class="container-fluid d-flex vh-100 auth py-5 justify-content-center align-items-center">
        <div class="login-form w-50">
            <form action="/reset-password" method="post">
                {{csrf_field()}}
                @if (session('status'))
                    <div class="alert alert-primary text-center">
                        {{session('status') }}
                    </div>
                @endif
                <input type="hidden" name="token" value="{{Route::input('token')}}">
                <h2 class="text-center pb-3">Resetuj lozinku</h2>
                <p class="text-center pb-2">Sva polja su obavezna</p>
                <div class="form-group">
                    <input type="email" class="form-control {{$errors->has('email') ? 'novalid' :  session('sent')}}" placeholder="Email" name="email" value="{{ $email ?? old("email")}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control {{$errors->has('password') ? 'novalid' :  session('sent')}}" placeholder="Nova lozinka" name="password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'novalid' :  session('sent')}}" placeholder="Potvrdite novu lozinku" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Resetuj lozinku</button>
                </div>
                <div class="form-group text-center">
                    <a class="text-info" href="{{route('login')}}">Povratak na prethodnu stranu</a>
                </div>
            </form>
        </div>
    </div>
@endsection
