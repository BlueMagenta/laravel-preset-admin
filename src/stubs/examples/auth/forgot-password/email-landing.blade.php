@extends('templates.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-9">

            {{--login box--}}
            <form class="card">
                <div class="card-body">
                    <h1 class="h3">Recover Password Request Accepted</h1>
                    <p class="text-muted">An email containing recovery link will be sent to your email address. Please open the link to continue</p>

                    {{--back link--}}
                    <a href="#">Back to Front page</a>
                </div>
            </form>
        </div>
    </div>
@endsection