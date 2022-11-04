@extends('layouts.front.resetpassword')
@section('title') Reset Link @endsection
@section('pagedescription') Page Description 1 @endsection
@section('keywords') staroptic,lozinka,reset,email @endsection
@section('content')
    <div class="container-fluid vh-100 d-flex auth py-5 justify-content-center align-items-center">
        <div class="login-form w-50">
            <form action="{{route('password.email')}}" method="post">
               @csrf
                @if (session('status'))
                    <div class="alert alert-primary text-center">
                        {{session('status') }}
                        <p>!!!!! VAŽNO: Ako ne vidite link u <strong>INBOX-u</strong>, proverite <strong>SPAM</strong> folder !!!!!</p>
                    </div>

                @endif
                <h2 class="text-center pb-1">Zaboravio/la sam lozinku</h2>
                <p class="text-center pb-2">Upišite Vašu e-mail adresu</p>
                <div class="form-group">
                    <input type="email" class="form-control {{$errors->has('email') ? 'novalid' :  session('sent')}}" placeholder="E-mail" name="email" value="{{old("email")}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Pošalji link za reset lozinke</button>
                </div>
                <div class="form-group text-center">
                <a class="text-info" href="{{route('login')}}">Povratak na prethodnu stranu</a>
                </div>
            </form>

        </div>
    </div>
@endsection
