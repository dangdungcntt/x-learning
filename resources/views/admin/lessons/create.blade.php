@extends('admin.master')

@section('title', 'Add lesson')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new lesson</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Lessons </a>
                </li>
                <li class="active">
                    <strong>Add lesson</strong>
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
            <form method="POST" action="{{route("admin.lessons.store")}}" class="form-horizontal"
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
                    <label class="col-sm-2 control-label" for="course_id">Course</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="course_id" name="course_id" required>
                            @foreach($courses as $course)
                                <option value="{{$course->id}}"
                                        @if(old('type') == $course->id) selected @endif>{{$course->name}}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('course_id'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('course_id')}}
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
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary">Add lesson</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
