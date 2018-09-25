@extends('templates.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-9">

            {{--main logo--}}
            <div class="text-center pb-3">
                <img class="w-50" src="{{ asset('img/brand/logo.svg')}}" alt="CoreUI Logo">
            </div>

            {{--login box--}}
            <form class="card">
                <div class="card-body">
                    <h1 class="h3">Login</h1>
                    <p class="text-muted">Sign In to your account</p>

                    @component('examples.components.alert', ['type' => 'danger'])
                        some error message
                    @endcomponent

                    {{--username--}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="icon-user"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>

                    {{--password--}}
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="icon-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    {{--submit--}}
                    <button class="btn btn-primary btn-block mb-3">Login</button>

                    {{--forgot password link--}}
                    <a href="#">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection