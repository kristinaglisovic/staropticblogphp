@foreach($pocetna as $i=>$p)
        @if ($i==1)
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-5"><img class="img-fluid" src="{{asset("assets/img/featured-pic-".$p['slika'])}}"
                                                  alt="{{$p['alt']}}"></div>
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <div class="category pb-2"><strong>{{$p['naslov']}}</strong></div>
                                <h2 class="h4">{{$p['podnaslov']}}</h2>
                            </header>
                            <p>{{$p["text"]}}</p>
                        </div>
                    </div>
                </div>
            </div>

        @elseif ($i==0 || $i==2)
            <div class="row d-flex align-items-stretc">
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <div class="category pb-2"><strong>{{$p['naslov']}}</strong></div>
                                <h2 class="h4">{{$p['podnaslov']}}</h2>
                            </header>
                            <p>{{$p["text"]}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5"><img class="img-fluid" src="{{asset("assets/img/featured-pic-".$p['slika'])}}"
                                                 alt="{{$p['alt']}}"></div>
            </div>


        @endif

    @endforeach
