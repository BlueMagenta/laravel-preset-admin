<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

{{--little helper for displaying page title--}}
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
<body class="app flex-row align-items-center">

{{--content--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-9">
            @yield('content')
        </div>
    </div>
</div>

{{--script--}}
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/admin.js') }}"></script>
@yield('script')

</body>
</html>