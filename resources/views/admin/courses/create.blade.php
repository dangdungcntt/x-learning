@extends('admin.master')

@section('title', 'Add new course')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new course</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Courses </a>
                </li>
                <li class="active">
                    <strong>Add new course</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    add new course
@endsection
