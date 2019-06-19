<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('templates.components.head')
</head>

<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        @yield('content')
    </div>
</div>
</body>
</html>