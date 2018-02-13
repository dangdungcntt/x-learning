@extends('admin.master')

@section('title', 'All courses')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>All courses</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Courses</a>
                </li>
                <li class="active">
                    <strong>All courses</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    list
@endsection