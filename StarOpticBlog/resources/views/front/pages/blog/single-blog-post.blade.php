@extends('layouts.front.postslayout')
@section('title') Post @endsection
@section('pagekeywords') post,blog,staroptic @endsection
@section('pagedescription') Page desc 1 @endsection

@section('content')
    @if($post->status=='Objavljeno')
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
        @if(session()->has('user'))
            @php $user=session()->get('user'); @endphp
            @if($user->role_id == 1)
                <div class="container d-flex justify-content-between mb-2">
                    <a class="btn btn-info" href="{{route('post.edit',$post)}}">Izmeni</a>
                    <form action="{{route("post.delete",$post)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Obriši">
                    </form>
                </div>
            @endif

        @endif
        <div class="container">
            <div class="post-single">
                <div class="post-thumbnail"><img src="{{asset('assets/postImages/'.$post['main_photo'])}}" alt="{{$post['alt']}}" class="img-fluid"></div>
                <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                        <div class="category"><a href="#relPosts">{{$post->category->name}}</a> </div>
                    </div>
                    <h1>{{$post['title']}}</h1>
                    <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><div class="author d-flex align-items-center flex-wrap">
                            <div class="title"><span>Autor: {{$post->user->username}}</span></div></div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="date"><i class="icon-clock"></i>{{$post['created_at']->diffForHumans()}}</div>
                            <div class="views"><i class="icon-eye"></i> {{$post->visit_count}}</div>
                            <div class="comments meta-last"><i class="icon-comment"></i>{{count($comments)}}</div>
                        </div>
                    </div>
                    <div class="post-body">
                        <p class="lead">{!! $post['main_text']!!}</p>
                        <h3>{{$post['subtitle']}}</h3>
                        <p>{!!$post['subtitle_text1']!!}</p>
                        @if($post['quote']!=null)
                        <blockquote class="blockquote">
                            <p>{{$post['quote']}}</p>

                        </blockquote>
                        @endif
                        <p>{!! $post['subtitle_text2'] !!}</p>
                    </div>
                    <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                            @if($prethodniPost!=null)
                            <a href="{{route('post',$prethodniPost)}}" class="prev-post text-left d-flex align-items-center">
                            <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                            <div class="text"><strong class="text-primary">Prethodni post</strong>
                                <h6>{{$prethodniPost->title}}</h6>
                            </div></a>
                                @endif
                                @if($sledeciPost!=null)
                            <a href="{{route('post',['post'=>$sledeciPost])}}" class="next-post text-right d-flex align-items-center justify-content-end">
                            <div class="text"><strong class="text-primary">Sledeći post</strong>
                                <h6>{{$sledeciPost->title}}</h6>
                            </div>
                            <div class="icon next"><i class="fa fa-angle-right"></i></div></a>
                                  @endif
                    </div>
                    @include('front.components.recentPosts')

                    <div class="post-comments">
                        <header>
                            <h3 class="h6">Komentari<span class="no-of-comments">({{count($comments)}})</span></h3>
                        </header>
                        @if(count($comments)>0)
                        @foreach($comments as $comm)
                        <div class="comment">
                            <div class="comment-body">
                                    <div class="title"><strong>{{$comm->user->username}}</strong><span class="date">{{$comm->created_at}}</span></div>
                                <p>{{$comm->comment}}</p>
                                @if($user->role_id==1 || $comm->user->id==$user->id)
                                <form action="{{route('comment.destroy.front',$comm)}}" method="post">
                                    @csrf @method('delete')<input type="submit" class="btn mali text-info" name="obrisiKomentar" value="Obriši"/>
                                </form>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p class="font-weight-bold">Ne postoji nijedan komentar za ovaj post.</p>
                        @endif


                    </div>
                    @include('front.components.createComment')
            </div>
        </div>

    </main>
    @else
        <main class="post blog-post col-lg-8">
        <div class="alert alert-info text-dark text-center"><p>Post ne možete ga videti jer ne postoji ili nije objavljen.</p></div>
        </main>
    @endif
@endsection





