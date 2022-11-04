<!DOCTYPE html>
<html>
@include('front.fixed.head')
<body>
@include('front.fixed.navigation')

{{--content je levo--}}
<div class="container">
    <div class="row">
    @yield('content')
    @include('front.components.aside.aside')
    </div>
</div>


@include('front.fixed.footer')
@include('front.fixed.scripts')
</body>
</html>
