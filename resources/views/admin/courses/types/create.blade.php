@extends('admin.master')

@section('title', 'Add new course type')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new course type</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Courses </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.types.index')}}">Types </a>
                </li>
                <li class="active">
                    <strong>Add new type</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">

            {{--<div class="ibox-tools">--}}
            {{--<a class="collapse-link">--}}
            {{--<i class="fa fa-chevron-up"></i>--}}
            {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="ibox-content">
            <form method="POST" action="{{route("admin.courses.store")}}" class="form-horizontal"
                  autocomplete="off">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Name</label>
                    <div class="col-sm-10 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"/>
                        @if ($errors->has('name'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('name')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="email">Email</label>
                    <div class="col-sm-10 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}"/>
                        @if ($errors->has('email'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="password">Password</label>
                    <div class="col-sm-10 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" class="form-control" name="password"
                               autocomplete="new-password" value="{{ old('password') }}"/>
                        @if ($errors->has('password'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('password')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Add user</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
