@if(count($povezaniPostovi)>0)
<section class="latest-posts shadow-sm" id="relPosts">
    <div class="container">
        <header>
            <h2>Povezani postovi</h2>
        </header>
        <div class="row">
            @foreach($povezaniPostovi as $pp)
            <div class="post col-md-4 col-lg-4">
                <div class="post-thumbnail"><a href="{{route('post',$pp)}}"><img src="{{asset('assets/postImages/'.$pp['main_photo'])}}" alt="{{$pp['alt']}}" class="relPosts"/></a></div>
                <div class="post-details">
                        <h3 class="h4">{{$pp['title']}}</h3>
                </div>
            </div>
            @endforeach

        </div>


    </div>
</section>
@endif
