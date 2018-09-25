<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

@php($title = implode(' | ', array_filter([$title ?? false, config('app.name')])))

<html lang="{{ app()->getLocale() }}">

{{-- head --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/coreui.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

{{--body--}}
<body class="app header-fixed sidebar-fixed sidebar-lg-show">

{{--header--}}
<header class="app-header navbar">

    {{--small screen sidebar toggler--}}
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    @include('templates.components.header-logo')
    @include('templates.components.header-menu')
</header>

{{--main body--}}
<div class="app-body">

    {{--sidebar--}}
    <div class="sidebar">
        <nav class="sidebar-nav">
            @include('templates.components.sidebar-menu')
        </nav>

        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    {{--main content--}}
    <main class="main">
        @yield('content')
    </main>
</div>

{{--footer--}}
<footer class="app-footer">
    @include('templates.components.footer')
</footer>

{{--script--}}
<script src="{{ mix('js/coreui.js') }}"></script>
@yield('script')

</body>
</html>