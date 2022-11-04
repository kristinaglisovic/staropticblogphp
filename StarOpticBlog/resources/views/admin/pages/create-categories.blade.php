@extends('layouts.admin.admin-dash-layout')
@section('title') Kreiranje kategorija @endsection
@section('content')
    <!-- Main content -->
    <div class="content">
        @if(session('msg'))
            <div class="alert alert-success">
                <p class="text-white text-center pt-2">{{session('msg')}}</p>
            </div>
        @endif
        <div class="container-fluid">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <h3>Kreiranje</h3>
                    <div class="form-group">
                        <input type="text" value="{{old('category')}}" class="form-control {{$errors->has('category') ? 'novalid' :  session('sent')}}" id="category" name="category" placeholder="Ime kategorije">
                        @error('category')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kreiraj kategoriju</button>
                </div>
            </form>

            @include('admin.components.available-categories')


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

