<!DOCTYPE html>

<html lang="en">

@include('admin.fixed.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('admin.components.topnav')

@include('admin.components.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.components.pageheader')


         @yield('content')

    </div>
    <!-- /.content-wrapper -->

    @include('admin.fixed.footer')
</div>
<!-- ./wrapper -->


@include('admin.fixed.scripts')
@yield('CDN')
</body>
</html>
