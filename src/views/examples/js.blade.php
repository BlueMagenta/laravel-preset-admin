@extends('templates.admin')

@section('title')
    Example page with JS
@endsection

@section('breadcrumb')
    <a href="/" class="breadcrumb-item">{{ __('Home') }}</a>
    <span class="breadcrumb-item">{{ __('JS Example') }}</span>
@endsection

@section('content')
<div class="container" data-page="JavascriptExample">
    {{--success / error message--}}
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Alert example
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    {{-- index table --}}
    <div class="card">
        <div class="card-body table-responsive-sm">
            <table id="index-table" class="table table-hover dt-responsive" data-plugin="datatable" style="width: 100%">
                <thead>
                <tr>
                    <td>name</td>
                    <td>email</td>
                    <td>status</td>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><a href="#" data-key="name" data-id="1" data-toggle="modal" data-target="#detail-modal">user 1</a></td>
                    <td data-key="email">email.user.1@domain.com</td>
                    <td data-key="status">ok</td>
                </tr>
                <tr>
                    <td><a href="#" data-key="name" data-id="2" data-toggle="modal" data-target="#detail-modal">user 2</a></td>
                    <td data-key="email">email.user.2@domain.com</td>
                    <td data-key="status">ok</td>
                </tr>
                <tr>
                    <td><a href="#" data-key="name" data-id="3" data-toggle="modal" data-target="#detail-modal">user 3</a></td>
                    <td data-key="email">email.user.3@domain.com</td>
                    <td data-key="status">ok</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- detail modal --}}
    <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h5 modal-title">Detail Info</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">Name :</div>
                            <div class="col-md-8" data-key="name"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Email :</div>
                            <div class="col-md-8" data-key="email"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Status :</div>
                            <div class="col-md-8" data-key="status"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- index data source --}}
    <script id="index-data" type="application/json">
        {
          "1": {"name": "user 1", "email": "email.user.1@domain.com", "status": "ok"},
          "2": {"name": "user 2", "email": "email.user.2@domain.com", "status": "ok"},
          "3": {"name": "user 3", "email": "email.user.3@domain.com", "status": "not ok"}
        }
    </script>
</div>
@endsection