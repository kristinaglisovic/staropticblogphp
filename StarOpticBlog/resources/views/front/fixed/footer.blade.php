<!-- Page Footer-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <h6 class="text-white">StarOptik Blog</h6>
                </div>
                <div class="contact-details">
                    <p>Raše Plaovića 2, 11160 Beograd</p>
                    <p>Telefon: +381 64 6689 857</p>
                    <p>Email: <a href="mailto:office@staroptic.rs">office@staroptic.rs</a></p>
                    <ul class="social-menu">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menus d-flex">
                    <ul class="list-unstyled">
                        @foreach($menu as $i=>$m)
                            @if($i<4)
                            <li><a href="{{$m['route']}}" class="nav-link @if(request()->routeIs($m['route'])) active @endif">{{$m['name']}}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-md-4">
                {{--     LATEST POSTSSSSS    --}}
                <div class="latest-posts">
                    <p class="text-white font-weight-bold">Skorašnje objave</p>
                    @if(count($latestPosts)==0)

                        <div class="post d-flex align-items-center">
                            <div class="text-muted"><span>Nema kreiranih objava</span></div>
                        </div>
                    @else
                    @foreach($latestPosts as $lp)
                        <a href="{{route('post',$lp)}}">
                        <div class="post d-flex align-items-center">
                            <div class="image"><img src="{{asset("assets/postImages/".$lp->main_photo)}}" alt="{{$lp->alt}}" class="img-fluid"></div>
                            <div class="title"><strong>{{$lp->title}}</strong><span class="date last-meta">Vreme: {{$lp->created_at->diffForHumans()}}</span></div>
                        </div></a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2022. Sva prava zadržana.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Template By <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                        <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
