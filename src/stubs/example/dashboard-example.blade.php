@extends('layouts.admin.dashboard')

{{-- page title --}}
@section('title', 'example')

{{-- page content --}}
@section('content')

    {{-- (optional) content header --}}
    <section class="content-header">
   
        <h1>Page Header <small>Optional description</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
        
    </section>

    {{--main content--}}
    <section class="content container-fluid">
        
        {{-- box component. more info see https://adminlte.io/docs/2.4/boxes --}}
        <div class="box">
        
            {{-- box header --}}
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
            </div>
        
            {{-- box body --}}
            <div class="box-body">
                Start creating your amazing application!
            </div>
        
            {{-- box footer --}}
            <div class="box-footer">
                Footer
            </div>

        </div>
        
    </section>

@endsection

{{-- optional, template for dynamic element --}}
@section('templates')
<template></template>
@endsection

{{-- optional, page js --}}
@section('js')
<script></script>
@endsection