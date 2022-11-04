@extends('layouts.admin.admin-dash-layout')
@section('title') Postovi i komentari @endsection
@section('content')
    <!-- Main content -->
    <div class="content">
            <div class="table-responsive py-4 bg-white">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Korisnik</th>
                        <th scope="col">Post</th>
                        <th scope="col">Post ID</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Izbriši</th>
                        <th scope="col">Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($comments)==0)
                        <tr>
                            <td><strong>Trenutno nema komentara<strong></td></tr>
                    @else
                    @foreach($comments as $c)
                        <tr>
                            <th scope="row">{{$c->id}}</th>
                            <td>{{$c->user->username}}</td>
                            <td>{{$c->post->title}}</td>
                            <td>{{$c->post->id}}</td>
                            <td>{{$c->comment}}</td>
                            <td><form action="{{route("comment.destroy",$c)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Obriši">
                            </form></td>
                            <td><a href="{{route('post',$c->post)}}" class="btn btn-info">Pogledaj</a></td>
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
        <h3 class="pt-5 pb-2">Postovi</h3>
        <div class="table-responsive py-4 bg-white">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naslov</th>
                    <th scope="col">Broj komentara</th>
                    <th scope="col">Broj pregleda</th>
                    <th scope="col">Status</th>
                    <th scope="col">Obriši</th>
                    <th scope="col">Promeni status</th>
                    <th scope="col">Pogledaj</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts)==0)
                    <tr>
                        <td><strong>Trenutno nema postova</strong></td></tr>
                @else
                @foreach($posts as $p)
                    <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p->title}}</td>
                        <td>{{count($p->comments)}}</td>
                        <td>{{$p->visit_count}}</td>
                        <td>{{$p->status}}</td>
                        <td><form action="{{route("post.back.delete",$p)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Obriši">
                            </form></td>
                        <td><a href="{{route('post.status',$p)}}" class="btn btn-warning">Promeni status</a></td>
                        @if($p->status=='Objavljeno')
                        <td><a href="{{route('post',$p)}}" class="btn btn-info">Pogledaj</a></td>
                        @else
                            <td>Prvo objavite post da biste ga videli</td>
                        @endif


                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>


        </div>
        @if(session('msg2'))
            <div class="alert alert-success">
                <p class="text-white text-center pt-2">{{session('msg2')}}</p>
            </div>
        @endif


    </div><!-- /.container-fluid -->

    <!-- /.content -->
@endsection

