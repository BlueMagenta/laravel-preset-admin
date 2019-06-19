<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('templates.components.head')
</head>

<body class="app header-fixed sidebar-fixed sidebar-lg-show">
<header class="app-header navbar navbar-light navbar-expand-lg">
    @include('templates.components.header-logo')
    @include('templates.components.header-user-menu')
</header>

<div class="app-body">
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            @include('templates.components.sidebar-menu')
        </nav>
    </div>

    <main class="main">
        <nav class="breadcrumb">
            @section('breadcrumb')
                <span class="breadcrumb-item">{{ __('Home') }}</span>
            @show
        </nav>

        @yield('content')
    </main>
</div>

<footer class="app-footer">
    @include('templates.components.footer')
</footer>
</body>
</html>