<!-- Widget [Latest Posts Widget]        -->
<div class="widget latest-posts">
    <header>
        <h3 class="h4">Skorašnje objave</h3>
    </header>
    @if(count($latestPosts)==0)

        <div><p class="font-weight-bold">Nema kreiranih postova</p></div>
    @else
    @foreach($latestPosts as $lp)
    <div class="blog-posts shadow-sm">
            <a href="{{route('post',$lp)}}">
            <div class="item d-flex align-items-center">
                <div class="image m-3"><img src="{{asset('assets/postImages/'.$lp->main_photo)}}" alt="{{$lp->alt}}" class="img-fluid"></div>
                <div><p class="font-weight-bold">{{$lp->title}}</p>
                        <div class="date"><i class="icon-clock"></i><span class="maliFont">{{$lp['created_at']->diffForHumans()}}</span></div>
                </div>
            </div>
            </a>
    </div>
    @endforeach
    @endif
</div>
