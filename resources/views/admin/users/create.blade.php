@extends('admin.master')

@section('title', 'Add new user')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new user</h2>
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
    <div class="ibox float-e-margins">
        <div class="ibox-title">

            {{--<div class="ibox-tools">--}}
            {{--<a class="collapse-link">--}}
            {{--<i class="fa fa-chevron-up"></i>--}}
            {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="ibox-content">
            <form method="POST" action="{{route("admin.users.store")}}" class="form-horizontal"
                  autocomplete="off">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required />
                        @if ($errors->has('name'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('name')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}" required />
                        @if ($errors->has('email'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="password">Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" class="form-control" name="password"
                               autocomplete="new-password" value="{{ old('password') }}" required />
                        @if ($errors->has('password'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('password')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-10 checkbox i-checks">
                        <label style="padding-left: 15px" for="teacher">
                            <input type="checkbox" id="teacher" name="teacher"><i></i> Teacher
                        </label>
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
