<!doctype html>
<html class="no-js" lang="en">

    @include('layouts.head')

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('layouts.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">

        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

    </div>

    @include('layouts.script')

    @yield('script-extra')
</body>

</html>