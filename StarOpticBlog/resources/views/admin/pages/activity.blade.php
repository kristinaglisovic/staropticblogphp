@extends('layouts.admin.admin-dash-layout')
@section('title') Aktivnosti korisnika @endsection
@section('content')
    <!-- Main content -->
    <div class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registracija, izmena, brisanje, odjava, prijava i komentarisanje korisnika</h3>
                    </div>
                    <div class="container pt-2">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-12"><input type="date" id="from_date" name="from_date"></div>
                            <div class="col-lg-1 col-md-12"><p class="pomeri1 pomeri2">do</p></div>
                            <div class="col-lg-3 col-md-12"><input type="date" id="to_date" name="to_date"></div>
                            <div class="col-lg-3 col-md-12 pomeri1"><button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Filtriraj datume</button></div>
                            <div class="col-lg-2 col-md-12 pomeri2"><button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Osveži</button></div>
                        </div>
                    </div>



                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <p class="text-center my-3">Broj rezultata filtriranja: <span id="total_records"></span></p>
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Uloga</th>
                                <th>Aktivnost</th>
                                <th>Datum</th>
                            </tr>
                            </thead>
                            <tbody id="activity">


                            </tbody>
                        </table>


                        {{csrf_field()}}
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="container">
            <form action="{{route('admin.activity.destroy')}}" class="text-center" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Obriši sve">
            </form>
            </div>
            @if(session('msg'))
                <div class="container-fluid pt-2">
                <div class="alert alert-success">
                    <p class="text-dark text-center pt-2">{{session('msg')}}</p>
                </div>
                </div>
            @endif
        </div>

    </div>
    <!-- /.content -->
@endsection

