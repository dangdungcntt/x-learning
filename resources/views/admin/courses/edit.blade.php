@extends('admin.master')

@section('title', 'Edit course')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Edit course</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Courses </a>
                </li>
                <li class="active">
                    <strong>Edit course</strong>
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
                <form method="POST" action="{{route("admin.courses.update", $course->id)}}" class="form-horizontal"
                      autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="name">Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="name" class="form-control" name="name"
                                   value="{{ old('name') ?? $course->name }}" required/>
                            @if ($errors->has('name'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('teacher') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="teacher">Teacher</label>
                        <div class="col-md-10 col-sm-9">
                            <select class="form-control" id="teacher" name="teacher_id" required>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}"
                                            @if(old('teacher') == $teacher->id || $course->teacher_id == $teacher->id) selected @endif>{{$teacher->name}}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('teacher'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('teacher')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="description">Description</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="description" class="form-control" name="description"
                                   value="{{ old('description') ?? $course->description }}" required/>
                            @if ($errors->has('description'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('description')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('details') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="details">Details</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="details" class="form-control" name="details"
                                   value="{{ old('details') ?? $course->details }}" required/>
                            @if ($errors->has('details'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('details')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="type">Type</label>
                        <div class="col-md-10 col-sm-9">
                            <select class="form-control" id="type" name="type_id" required>
                                @foreach($courseTypes as $courseType)
                                    <option value="{{$courseType->id}}"
                                            @if(old('type') == $courseType->id || $course->type == $courseType->id) selected @endif>{{$courseType->name}}
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
                        <label class="col-md-2 col-sm-3 control-label" for="price">Price</label>
                        <div class="col-md-10 col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" id="price" class="form-control" name="price"
                                       value="{{ old('price') ?? $course->price }}" required/>
                            </div>
                            @if ($errors->has('price'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('price')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('max_students') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="max_students">Max students</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="number" id="max_students" class="form-control" name="max_students"
                                   value="{{ old('max_students') ?? $course->max_students }}" required/>
                            @if ($errors->has('max_students'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('max_students')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('start_at') ? ' has-error' : '' }}">
                        <label class="col-md-2 col-sm-3 control-label" for="start_at">Start at</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="date" id="start_at" class="form-control" name="start_at"
                                   value="{{ old('start_at') ?? date("Y-m-d", strtotime($course->start_at)) }}"
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
                                   value="{{ old('end_at') ?? date("Y-m-d", strtotime($course->end_at)) }}"/>
                            @if ($errors->has('end_at'))
                                <span class="help-block m-b-none text-danger">
                                {{$errors->first('end_at')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 col-sm-3 control-label" for="public">Status</label>
                        <div class="col-md-10 col-sm-9 checkbox i-checks">
                            <label style="padding-left: 15px" for="public">
                                <input type="checkbox" id="public" name="public"
                                       @if($course->public) checked @endif><i></i> Public
                            </label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">Update course</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-center">

                <div class="preview-img" style="margin: auto">
                    <a href="#"><img class="img-thumbnail" id="previewImg"
                                                                          src="{{asset(Config::get('app.course_path') . ($course->image ?? 'default.jpg'))}}"></a>
                </div>
                <br>
                <label for="img" class="btn btn-primary">Upload image</label>
                <input type="file" id="img" style="display: none" />
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('#img').on('change', function (e) {
                e.preventDefault();

                let file = e.target.files[0];

                if (file.size > 5 * 1024 * 1024) {
                    return swal('File too large, max size is 5MB')
                }

                let data = new FormData();
                data.append('img', file);
                data.append('_token', csrf_token);

                $.ajax({
                    url: '{{route('admin.courses.update_img', $course->id)}}',
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: data
                })
                    .then(res => {
                        if (!res.success) {
                            return swal({
                                title: 'Error',
                                text: res.message,
                                icon: "error",
                            })
                        }

                        // console.log(res.path);

                        $('#previewImg').attr('src', res.path + "?v=1");

                        swal('Successfully', {
                            icon: "success",
                        })
                    });
                return false
            })
        });
    </script>
    @endsection
