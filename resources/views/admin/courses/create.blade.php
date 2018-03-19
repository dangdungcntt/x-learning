@extends('admin.master')

@section('title', 'Add course')

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
                    <strong>Add course</strong>
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
                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="description">Description</label>
                    <div class="col-sm-10">
                        <input type="text" id="description" class="form-control" name="description"
                               value="{{ old('description') }}" required />
                        @if ($errors->has('description'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('description')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('details') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="details">Details</label>
                    <div class="col-sm-10">
                        <input type="text" id="details" class="form-control" name="details"
                               value="{{ old('details') }}" required />
                        @if ($errors->has('details'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('details')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="type">Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="type" name="type_id" required>
                            @foreach($courseTypes as $courseType)
                                <option value="{{$courseType->id}}"
                                        @if(old('type') == $courseType->id) selected @endif>{{$courseType->name}}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('type'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('type')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="price">Price</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" id="price" class="form-control" name="price" value="{{ old('price') ?? 100 }}" required />
                        </div>
                        @if ($errors->has('price'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('price')}}
                            </span>
                        @endif  
                    </div>
                </div>
                <div class="form-group {{ $errors->has('max_students') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="max_students">Max students</label>
                    <div class="col-sm-10">
                        <input type="number" id="max_students" class="form-control" name="max_students"
                               value="{{ old('max_students') ?? 15 }}" required />
                        @if ($errors->has('max_students'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('max_students')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('start_at') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="start_at">Start at</label>
                    <div class="col-sm-10">
                        <input type="date" id="start_at" class="form-control" name="start_at"
                               value="{{ old('start_at') ?? date("Y-m-d", strtotime('tomorrow')) }}" required />
                        @if ($errors->has('start_at'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('start_at')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('end_at') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="end_at">End at</label>
                    <div class="col-sm-10">
                        <input type="date" id="end_at" class="form-control" name="end_at" value="{{ old('end_at') ?? date("Y-m-d", strtotime('+3 months')) }}"/>
                        @if ($errors->has('end_at'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('end_at')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="public">Status</label>
                    <div class="col-sm-10 checkbox i-checks">
                        <label style="padding-left: 15px" for="public">
                            <input type="checkbox" id="public" name="public"><i></i> Public
                        </label>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary">Add course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
