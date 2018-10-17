@extends('templates.admin', ['pageTitle' => 'example'])

@section('content')
    {{--breadcrumb component--}}
    @component('templates.bootstrap4.breadcrumb')
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Users</li>
    @endcomponent

    {{--content --}}
    <div class="container">

        {{--success / error message--}}
        @component('templates.bootstrap4.alert', ['type' => 'danger'])
            alert message content
        @endcomponent

        {{--title--}}
        <div class="row">
            <h1 class="h3 col-sm-6">User Management</h1>

            <div class="col-sm-6">
                <a href="#" class="btn btn-primary float-sm-right"><i class="fas fa-plus"></i> New</a>
            </div>
        </div>

        {{--datatable zero config--}}
        <div class="card">
            <div class="card-body table-responsive-sm">
                <table class="table table table-hover" data-toggle="datatable">
                    <thead>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                        <td>status</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><a href="#" class="text-dark">user 1</a></td>
                        <td>email.user@domain.com</td>
                        <td>ok</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-dark">user 1</a></td>
                        <td>email.user@domain.com</td>
                        <td>ok</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-dark">user 1</a></td>
                        <td>email.user@domain.com</td>
                        <td>ok</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <form class="card-body">

                {{--select2 zero config--}}
                <div class="form-row">
                    <div class="col-sm-2">
                        <label>select2</label>
                        <p class="text-muted">select input using select2 library</p>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" data-toggle="select2">
                            <option>options</option>
                            <option>options</option>
                            <option>options</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-danger">optional error message</p>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('script')
    {{--additional custom script--}}
@endsection