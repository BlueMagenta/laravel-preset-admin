@extends('templates.admin')

@section('title')
    Example plugins & inputs
@endsection

@section('breadcrumb')
    <a href="/" class="breadcrumb-item">{{ __('Home') }}</a>
    <span class="breadcrumb-item">{{ __('Example') }}</span>
@endsection

@section('content')
<div class="container">

    {{--success / error message--}}
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Alert example
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    {{--title--}}
    <div class="row mb-2">
        <h1 class="h3 col-sm-6">Page Title</h1>

        <div class="col-sm-6">
            <a href="#" class="btn btn-primary float-sm-right d-block"><i class="fas fa-plus"></i> New</a>
        </div>
    </div>

    {{--datatable zero config--}}
    <div class="card">
        <div class="card-body table-responsive-sm">
            <table class="table table-hover dt-responsive" data-plugin="datatable" style="width: 100%">
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
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="select2">select2</label>
                </div>

                <div class="col-md-6">
                    <select id="select2" class="form-control" data-plugin="select2">
                        <option>options</option>
                        <option>options</option>
                        <option>options</option>
                    </select>
                </div>

                <div class="col-md-4 col-form-label">
                    <p class="text-danger">optional error message</p>
                </div>
            </div>

            {{--datetimepicker js--}}
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="datetimepicker">datetimepicker</label>
                    <p class="text-muted">using font awesome 5 icons</p>
                </div>

                <div class="col-md-6">
                    <div class=" input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </span>
                        <input type="text" id="datetimepicker" class="form-control" data-plugin="datetimepicker">
                    </div>
                </div>
            </div>

            {{--summernote--}}
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="summernote">summernote</label>
                </div>

                <div class="col-md-6">
                    <textarea id="summernote" class="form-control" data-plugin="summernote"></textarea>
                </div>

                <div class="col-md-4">
                </div>
            </div>

            {{--image upload preview--}}
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="dropzone">dropzone</label>
                    <p class="text-muted">file uploader</p>
                </div>

                <div class="col-md-6">
                    <div  id="dropzone" class="dropzone dz-clickable form-control" data-plugin="dropzone" data-url="/upload" >
                        <div class="dz-message h5">
                            Drop files here or click to upload.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                </div>
            </div>

            {{--markdown parser--}}
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="markdown">showdown</label>
                    <p class="text-muted"># hello markdown!</p>
                </div>

                <div class="col-md-6">
                    <div data-plugin="markdown"># hello markdown!</div>
                </div>

                <div class="col-md-4">
                </div>
            </div>

            {{--markdown preview--}}
            <div class="form-group form-row">
                <div class="col-md-2 col-form-label">
                    <label for="markdown">showdown + xss filter</label>
                    <p class="text-muted">markdown preview</p>
                </div>

                <div class="col-md-6 mb-2">
                    <textarea id="markdown" class="form-control" rows="3"></textarea>
                </div>

                <div class="col-md-4 mb-2">
                    <div id="markdown-preview"></div>
                </div>

                <div class="offset-md-2 col-md-6">
                    <button type="button" class="btn btn-secondary" data-plugin="markdown-preview" data-source="#markdown" data-target="#markdown-preview">preview</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection