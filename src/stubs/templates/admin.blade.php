<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

{{--little helper for displaying page title--}}
@php($pageTitle = implode(' | ', array_filter([$pageTitle ?? false, config('app.name')])))

<html lang="{{ app()->getLocale() }}">

{{-- head --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    <title>{{ $pageTitle }}</title>
</head>

{{--body--}}
<body class="app header-fixed sidebar-fixed sidebar-lg-show">

{{--header--}}
@component('templates.coreui.header')

    {{--logo--}}
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
    </a>

    {{--header menu--}}
    @include('templates.components.header-menu')
@endcomponent

{{--main body--}}
<div class="app-body">

    {{--sidebar--}}
    @component('templates.coreui.sidebar')

        {{--sidebar menu--}}
        @include('templates.components.sidebar-menu')
    @endcomponent

    {{--main content--}}
    <main class="main">
        @yield('content')
    </main>
</div>

{{--footer--}}
<footer class="app-footer">
    <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
    </div>

    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>

{{--script--}}
<script src="{{ mix('js/admin.js') }}"></script>
@yield('script')

</body>
</html>