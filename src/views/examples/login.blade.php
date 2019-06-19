@extends('templates.blank')

@section('title')
    Example login form
@endsection

@section('content')
<div class="col-lg-5 col-sm-9">
    <form class="card">
        <div class="card-body">
            <h1 class="h3">Login</h1>
            <p class="text-muted">Sign In to your account</p>

            {{--alert--}}
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Alert example
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{--username--}}
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>

            {{--password--}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
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
@endsection