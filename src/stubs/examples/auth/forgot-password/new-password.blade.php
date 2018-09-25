@extends('templates.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-9">

            {{--login box--}}
            <form class="card">
                <div class="card-body">
                    <h1 class="h3">New Password</h1>
                    <p class="text-muted">Enter your new password</p>

                    {{--error message--}}
                    @if($errors->isNotEmpty())
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {{--password--}}
                    <div class="input-group mb-3">
                        <input class="form-control" type="password" name="password" placeholder="password">
                    </div>

                    {{--password confirmation--}}
                    <div class="input-group mb-4">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="password confirmation">
                    </div>

                    {{--submit--}}
                    <button class="btn btn-primary btn-block mb-3">Change your password</button>
                </div>
            </form>
        </div>
    </div>
@endsection