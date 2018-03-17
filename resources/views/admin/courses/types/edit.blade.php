@extends('admin.master')

@section('title', 'Add new course type')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Edit course type</h2>
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
                    <strong>Edit</strong>
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
            <form method="POST" action="{{route("admin.courses.types.update", $courseType->id)}}" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-2 col-sm-3 control-label" for="name">Name</label>
                    <div class="col-md-10 col-sm-9">
                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') ?? $courseType->name }}" required />
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
                        <input type="text" id="details" class="form-control" name="details" value="{{ old('details') ?? $courseType->details }}" required />
                        @if ($errors->has('details'))
                            <span class="help-block m-b-none text-danger">
                                {{$errors->first('details')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-4 text-center">

                <div class="preview-img" style="margin: auto">
                    <a href="#"><img class="img-thumbnail" id="previewImg"
                                                                          src="{{asset(Config::get('app.course_type_path') . ($courseType->image ?? 'default.jpg'))}}"></a>
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
                    url: '{{route('admin.courses.types.update_img', $courseType->id)}}',
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
