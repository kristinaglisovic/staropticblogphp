@extends('layouts.admin.admin-dash-layout')
@section('title') Kontakt @endsection
@section('content')

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12 col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Poruke</h3>
                        </div>
                        <div class="card-body p-0">

                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Obriši</th>
                                        <th>Ime i Prezime</th>
                                        <th>Poruka</th>
                                        <th>Broj telefona</th>
                                        <th>Email</th>
                                        <th>Primljeno</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($messages)==0)
                                           <td><strong>Trenutno nema nijedna poruka</strong></td>
                                    @else
                                    @foreach($messages as $m)
                                    <tr>
                                        <td>
                                       <form action="{{route("contact.destroy",$m)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="Obriši">
                                            </form></td>
                                        <td class="mailbox-name">{{$m->first_name}} {{$m->last_name}}</td>
                                        <td class="mailbox-subject">{{$m->message}}
                                        </td>
                                        <td class="mailbox-attachment">{{$m->phone}}</td>
                                        <td class="mailbox-attachment">{{$m->email}}</td>
                                        <td class="mailbox-date">{{$m->created_at->diffForHumans()}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                    <div class="container text-center pb-4">
                        <form action="{{route('contact.truncate')}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Obriši sve">
                        </form>
                    </div>
                    @if(session('msg'))
                        <div class="alert alert-success">
                            <p class="text-white text-center pt-2">{{session('msg')}}</p>
                        </div>

            @endif
            <!-- /.row -->

        </section>
@endsection
