@extends('layouts.front.postslayout')
@section('title') Postovi @endsection
@section('pagedescription') Page Description 3 @endsection
@section('keywords') staroptic, blog, posts, postovi @endsection
@section('content')
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
            @if(session('msg'))
                <div class="alert alert-info text-center"><strong>{{session('msg')}}</strong></div>
            @endif

            <div class="container">
                <div class="row">
                    @include('front.components.posts')
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    {{$posts->links()}}
                </nav>
            </div>
        </main>
@endsection


