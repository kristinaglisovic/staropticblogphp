@extends('layouts.admin.admin-dash-layout')
@section('title') Početna @endsection
@section('content')
    <!-- Main content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{$brojUsera}}</h3>

                            <p>Registrovanih korisnika</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <a href="{{route('admin.users.registered')}}" class="small-box-footer">Više informacija <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{$brojAktivnosti}}</h3>

                            <p>Aktivnosti korisnika</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>
                        <a href="{{route('admin.activity')}}" class="small-box-footer">Više informacija <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>{{$brojKomentara}}</h3>

                            <p>Komentara</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-comment-dots"></i>
                        </div>
                        <a href="{{route('admin.comments')}}" class="small-box-footer">Više informacija <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3>{{$brojPoruka}}</h3>

                            <p>Poruka</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="{{route('admin.contact')}}" class="small-box-footer">Više informacija <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>



            <!-- ./col -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

