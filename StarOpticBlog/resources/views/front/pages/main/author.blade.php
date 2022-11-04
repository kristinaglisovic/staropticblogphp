@extends('layouts.front.mainlayout')
@section('title') Autor @endsection
@section('pagedescription') Page Description 3 @endsection
@section('keywords') staroptic, autor @endsection
@section('content')

    <div id="intro" class="auth">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="container py-5 d-flex align-items-center justify-content-center flex-column text-center h-100">
                <img src="{{asset("assets/img/author.png")}}" class="img-fluid shadow" alt="pageauthor"/>
                <div class="text-white py-3">
                    <h1 class="mb-3">Kristina Glišović</h1>
                    <h5 class="mb-4">Moje ime je Kristina i ja sam kreator ovog sajta. Trenutno sam student na Visokoj ICT školi, gde se trudim da unapredim svoje sposobnosti i znanje u oblasti IT-a.</h5>
                    <a class="btn btn-info btn-lg m-2" href="https://kimaportfolio.netlify.app/" role="button"
                       rel="nofollow" target="_blank">Portfolio</a>
                    <a class="btn btn-warning btn-lg m-2" href="{{asset('docs.pdf')}}" role="button"
                       rel="nofollow" target="_blank">Dokumentacija</a>
                </div>
            </div>
        </div>
    </div>


@endsection
