@extends('admin.master')

@section('title', 'Add new user')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new course</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.users.index')}}">Users </a>
                </li>
                <li class="active">
                    <strong>Add new user</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    add new user
@endsection
