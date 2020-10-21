<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('backened.layout.partial.head')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    @yield('auth-content')
    @include('backened.layout.partial.footer_script')
</body>
</html>
