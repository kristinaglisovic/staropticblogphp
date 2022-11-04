<!-- Widget [Categories Widget]-->
<div class="widget categories">
    <header>
        <h3 class="h6 text-center">Kategorije</h3>
    </header>
    @if(count($posts)==0)

        <div class="item d-flex justify-content-between"><span>Nema nijedna kategorija</span></div>
    @else
    @foreach($categories as $c)
    <div class="item d-flex justify-content-between"><a href="{{route('posts',['category'=>$c->id])}}">{{$c->name}}</a><span>({{count($c->posts()->where('status','Objavljeno')->get())}})</span></div>
    @endforeach
    @endif
</div>
