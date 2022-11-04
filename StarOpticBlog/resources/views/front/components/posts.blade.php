@forelse($posts as $p)
    <!-- post -->

    <div class="post col-xl-6">
        @if(session()->has('user'))
            @php $user=session()->get('user') @endphp
            @if($user->role_id == 1)
        <div class="container d-flex justify-content-between mb-2">
            <a class="btn btn-info" href="{{route('post.edit',$p)}}">Izmeni</a>
            <form action="{{route('post.delete',$p)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Obriši">
            </form>
        </div>
            @endif

            @endif

        <div class="post-thumbnail"><a href="{{route('post',$p)}}"><img src="{{asset('assets/postImages/'.$p['main_photo'])}}" alt="{{$p['alt']}}" class="postImg"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date meta-last">{{$p['updated_at']->diffForHumans()}}</div>
                <div class="category"><p>{{$p->category->name}}</p></div>
            </div><a href="{{route('post',$p)}}">
                <h3 class="h4">{{$p['title']}}</h3></a>
            <p class="text-muted">{!! str_limit($p['main_text'],90)!!}</p>
            <footer class="post-footer d-flex align-items-center"><div class="author d-flex align-items-center flex-wrap">
                    <div class="title"><span>{{$p->user->username}}</span></div></div>
                <div class="date"><i class="icon-clock"></i>{{$p['created_at']->diffForHumans()}}</div>
                <div class="views"><i class="icon-eye"></i> {{$p->visit_count}}</div>
                <div class="comments meta-last"><i class="icon-comment"></i>{{count($p->comments()->get())}}</div>
            </footer>
        </div>
    </div>
    @empty
    <div class="alert-info container text-center mb-4"><h4 class="py-3"><strong>Ne postoji nijedan post za zadatu pretragu</strong></h4></div>
@endforelse
