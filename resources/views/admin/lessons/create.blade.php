@extends('admin.master')

@section('title', 'Add new lesson')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new lesson</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.lessons.index')}}">Lessons </a>
                </li>
                <li class="active">
                    <strong>Add new lesson</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    add new lesson
@endsection
