@extends('admin.master')

@section('title', 'Edit user')

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
                    <strong>Edit user</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
        </div>
        <div class="ibox-content">
            <form method="POST" action="{{route("admin.users.update", $user->id)}}" class="form-horizontal"
                  autocomplete="off">
                {{ csrf_field() }}
                {{ method_field("PUT") }}

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Name</label>
                    <div class="col-sm-10 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" id="name" class="form-control" name="name"
                               value="{{old('name') ?? $user->name}}"/>
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
                        <input type="text" id="email" class="form-control" name="email"
                               value="{{old('email') ?? $user->email }}"/>
                        @if ($errors->has('email'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="phone">Phone</label>
                    <div class="col-sm-10 {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input type="text" id="phone" class="form-control" name="phone"
                               autocomplete="new-password" value="{{old('phone') ?? $user->phone }}"/>
                        @if ($errors->has('phone'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('phone')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                        @if (old('name'))
                            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-white" type="submit">Cancel</a>
                        @endif

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
