<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.layouts._head')
</head>
<body>
    @include('front.layouts._nav')

    <!-- ======= Health Management Content Section ======= -->

    @yield('content')

    @include('front.layouts._javascript')
    @include('front.layouts._footer')

</body>
</html>