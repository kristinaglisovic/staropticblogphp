@extends('layouts.admin.admin-dash-layout')
@section('title') Kreiranje admina @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-lg-12 col-md-12">
                    <!-- jquery validation -->
                    <div class="container-fluid">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route("registerAdmin")}}" method="post">
                            @csrf
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
                                <button type="submit" class="btn btn-info btn-block">Napravi admina</button>
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
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        <!-- /.container-fluid -->
    </section>

@endsection

