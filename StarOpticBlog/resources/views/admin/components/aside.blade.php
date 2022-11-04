<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dash')}}" class="brand-link">
        <img src="{{asset('assets/img/logo1.PNG
')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @php $user=session()->get('user');@endphp
            <div class="info">
                <span class="d-block text-white">Ime: {{$user->username}}</span>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        @php use App\Models\AdminMenu; $adminMenu=AdminMenu::all();@endphp
                        @foreach($adminMenu as $m)
                        <li class="nav-item">
                            <a href="{{route($m['route'])}}" class="nav-link @if(request()->routeIs($m['route'])) active @endif">
                                <i class="{{$m['icon']}}"></i>
                                <p>{{$m['name']}}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
