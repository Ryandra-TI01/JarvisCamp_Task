<!DOCTYPE html>
<html lang="en">
@include('partials._head')
    <body class="sb-nav-fixed">
        @include('partials._nav')
        <div id="layoutSidenav">
            @include('partials._sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('partials._footer')
            </div>
        </div>
        @include('partials._script')
    </body>
</html>
