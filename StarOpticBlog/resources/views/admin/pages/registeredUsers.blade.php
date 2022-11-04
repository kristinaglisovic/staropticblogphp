@extends('layouts.admin.admin-dash-layout')
@section('title') Registrovani korisnici @endsection
@section('content')
    <!-- Main content -->
    <div class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <!-- /.card-header -->
                    {{--USERI--}}
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Uloga</th>
                                <th>Izbriši</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($users)==0)
                                <tr>
                                    <td><strong>Trenutno nema nijedan registrovan korisnik</strong></td></tr>
                            @else
                            @foreach($users as $u)
                            <tr>
                                <td>{{$u->id}}</td>
                                <td>{{$u->first_name}}</td>
                                <td>{{$u->last_name}}</td>
                                <td>{{$u->username}}</td>
                                <td>{{$u->email}}</td>
                                <td>
                                    <form action="{{route('update.role')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="userId" value="{{$u->id}}">
                                    <select class="form-select" name="roleUser" aria-label="Default select example">
                                        @foreach($roles as $r)
                                          @if($u->role_id==$r->id)
                                                <option selected value="{{ $r->id }}">{{ $r->name }}</option>
                                            @else
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                        <input type="submit" class="ml-3 btn btn-warning" value="Promeni ulogu">
                                    </form>
                                    <td>
                                        <form action="{{route("user.destroy",$u)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="Obriši">
                                        </form>
                                    </td>

                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    @if(session('msg'))
                        <div class="alert alert-success">
                            <p class="text-white text-center pt-2">{{session('msg')}}</p>
                        </div>
                    @endif

                    @if(count($admins)==0)
                        <td>U bazi mora postojati bar jedan admin i ne može se obrisati</td>
                    @else


                    {{--ADMINI--}}
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Uloga</th>
                                <th>Izbriši</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($admins as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->first_name}}</td>
                                        <td>{{$u->last_name}}</td>
                                        <td>{{$u->username}}</td>
                                        <td>{{$u->email}}</td>

                                        <td>
                                            <form action="{{route('update.role')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="userId" value="{{$u->id}}">
                                                <select class="form-select" name="roleUser" aria-label="Default select example">
                                                    @foreach($roles as $r)
                                                        @if($u->role_id==$r->id)
                                                            <option selected value="{{ $r->id }}">{{ $r->name }}</option>
                                                        @else
                                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                  @if(count($admins)==1)
                                                     <td><strong>U bazi mora postojati bar 1 admin i ne može se promeniti uloga.</strong></td>
                                                   @else
                                                   <input type="submit" class="ml-3 btn btn-warning" value="Promeni ulogu">
                                                  @endif
                                            </form>

                                        @if(count($admins)==1)
                                            <td><strong>U bazi mora postojati bar 1 admin i ne može se obrisati.</strong></td>
                                         @else
                                        <td>
                                            <form action="{{route("user.destroy",$u)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="Obriši">
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div>

    <!-- /.content -->
@endsection

