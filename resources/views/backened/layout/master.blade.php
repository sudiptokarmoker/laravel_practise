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
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('backened.layout.partial.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            @yield('admin-content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            @include('backened.layout.partial.footer')
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        @include('backened.layout.partial.offset')
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    @include('backened.layout.partial.footer_script')
</body>

</html>
