@extends('admin.master')

@section('title', 'Edit lesson')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Edit lesson</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.lessons.index')}}">Lessons </a>
                </li>
                <li class="active">
                    <strong>Edit lesson</strong>
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
        <div class="ibox-content clearfix">
            <div class="col-md-8">
                <form method="POST" action="{{route("admin.lessons.update", $lesson->id)}}" class="form-horizontal"
                      autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="name">Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="name" class="form-control" name="name"
                                   value="{{ old('name') ?? $lesson->name }}" required/>
                            @if ($errors->has('name'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('details') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="details">Details</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="details" class="form-control" name="details"
                                   value="{{ old('details') ?? $lesson->details }}" required/>
                            @if ($errors->has('details'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('details')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('course_id') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="course_id">Type</label>
                        <div class="col-md-10 col-sm-9">
                            <select class="form-control" id="course_id" name="course_id" required>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}"
                                            @if(old('course_id') == $course->id || $lesson->course_id == $course->id) selected @endif>{{$course->name}}
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
                        <label class="col-md-2 col-sm-3 control-label" for="start_at">Start at</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="date" id="start_at" class="form-control" name="start_at"
                                   value="{{ old('start_at') ?? date("Y-m-d", strtotime($lesson->start_at)) }}"
                                   required/>
                            @if ($errors->has('start_at'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('start_at')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('end_at') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="end_at">End at</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="date" id="end_at" class="form-control" name="end_at"
                                   value="{{ old('end_at') ?? date("Y-m-d", strtotime($lesson->end_at)) }}"/>
                            @if ($errors->has('end_at'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('end_at')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-3">
                            <button class="btn btn-primary">Update lesson</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-center">

                <div class="preview-img" style="margin: auto">
                    <a href="#"><img class="img-thumbnail" id="previewImg"
                                                                          src="{{asset(Config::get('app.lesson_path') . ($lesson->image ?? 'default.jpg'))}}"></a>
                </div>
                <br>
                <label for="img" class="btn btn-primary">Upload image</label>
                <input type="file" id="img" style="display: none" />
            </div>
        </div>
    </div>
@endsection

@include('admin.script.update-img', ['url' => route('admin.lessons.update_img', $lesson->id)])
