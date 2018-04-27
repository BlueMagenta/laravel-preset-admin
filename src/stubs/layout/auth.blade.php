<!DOCTYPE html>
<html>

<head>
@section('head')
    @include('layouts.admin.components.head')
@show
</head>

<body class="hold-transition login-page">
<div id="app-admin" class="login-box">

    {{--logo--}}
    <div class="login-logo">
    @section('login-logo')
        <a href="/"><b>Admin</b>LTE</a>
    @show
    </div>

    {{--content--}}
    <div class="login-box-body">
        @yield('content')
    </div>

</div>

{{--js script--}}
@section('js')
    <script src="{{ mix('js/admin.js') }}"></script>
@show

</body>
</html>