{{-- 
    auth template
    more info see admin-lte/pages/examples/login.html
    section:
        head
        content
        js
    --}}

<!DOCTYPE html>
<html>

<head>
@section('head')
    @include('layouts.admin.components.head')
@show
</head>

<body class="hold-transition login-page">
<div class="login-box">

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
<script src="{{ mix('js/admin.js') }}"></script>
@yield('js')

</body>
</html>