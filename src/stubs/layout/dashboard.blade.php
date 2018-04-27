<!DOCTYPE html>
<html>

<head>
@section('head')
    @include('layouts.admin.components.head')
@show
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    {{--Main header section--}}
    <header class="main-header">

        {{--logo component--}}
        @section('logo')
            @include('layouts.admin.components.top-logo')
        @show

        {{--header navbar--}}
        <nav class="navbar navbar-static-top" role="navigation">

            {{--sidebar toogle btn--}}
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            {{--header menu--}}
            <div class="navbar-custom-menu">
            @section('top-nav')
                @include('layouts.admin.components.top-menu')
            @show
            </div>

        </nav>

    </header>

    {{--menu sidebar (left sidebar) section--}}
    <aside class="main-sidebar">
        <section class="sidebar">
        @section('sidebar')
            @include('layouts.admin.components.sidebar')
        @show
        </section>
    </aside>

    {{--content section--}}
    <div class="content-wrapper">

        {{--content (page) header--}}
        <section class="content-header">
        @section('content-header')
            <h1>Page Header <small>Optional description</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        @show
        </section>

        {{--main content--}}
        <section class="content container-fluid">
            @yield('content')
        </section>

    </div>

    {{--footer section--}}
    <footer class="main-footer">
    @section('footer')
        @include('layouts.admin.components.footer')
    @show
    </footer>

    {{--disable this by default since mostly is unused. uncomment to activate--}}
    {{--control sidebar (right sidebar) section--}}
    {{--<aside class="control-sidebar control-sidebar-dark">--}}
    {{--@section('control-sidebar')--}}
        {{--@include('layouts.admin.components.control-sidebar')--}}
    {{--@show--}}
    {{--</aside>--}}
    {{--<div class="control-sidebar-bg"></div>--}}

</div>

{{--template for dynamic element--}}
@yield('templates')

{{--js script--}}
@section('js')
<script src="{{ mix('js/admin.js') }}"></script>
@show

</body>
</html>