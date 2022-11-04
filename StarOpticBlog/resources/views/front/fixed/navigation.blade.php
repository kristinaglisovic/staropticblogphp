<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand -->
                <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset("assets/img/logo1.PNG")}}" alt="logo" class="img-fluid"> </a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @foreach($menu as $m)
                    <li class="nav-item"><a href="{{route($m['route'])}}" class="nav-link @if(request()->routeIs($m['route'])) active @endif">{{$m['name']}}</a>
                    </li>
                    @endforeach
                    @if(session()->has('user'))
                            @php $user=session()->get('user') @endphp
                      @if($user->role_id == 1)

                                <li class="nav-item"><a href="{{route('admin.dash')}}" class="nav-link">Admin Panel</a>
                                </li>

                      @endif
                          <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Odjavi se</a>
                          </li>
                      @else
                           @guest
                            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Prijava</a>
                            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Registracija</a>
                            @endguest
                    @endif
                </ul>

            </div>
        </div>
    </nav>
</header>
