@extends('admin.master')

@section('title', 'All courses')

@section('style')
    <style>
        th {
            text-align: center;
        }
    </style>
@endsection

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>All courses</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.courses.index')}}">Courses</a>
                </li>
                <li class="active">
                    <strong>All courses</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            <h5>
                {{"Page " . $listCourses->currentPage() . "/" . $listCourses->lastPage()}}
                @if(!empty($noti))
                    | {!! $noti !!}
                @endif
            </h5>
            <div class="ibox-tools">
                <a href="{{route('admin.courses.create')}}" class="btn btn-primary btn-xs">Add new course</a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row m-b-sm m-t-sm">
                <div class="col-md-1">
                    <a href="{{route("admin.courses.index")}}" class="btn btn-white btn-sm">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                </div>
                <div class="col-md-11">
                    <form action="{{route('admin.courses.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" placeholder="Search for: name, details, description, teacher name"
                                   name="q" value="{{request()->input('q') ?? ''}}"
                                   class="input-sm form-control" required>
                            <span class="input-group-btn">
                            <button class="btn btn-sm btn-primary"> Search!</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="project-list">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="w-1">ID</th>
                        <th class="w-18">Name
                        <th class="w-18">Teacher</th>
                        <th class="w-10">Type</th>
                        <th class="w-8">Price</th>
                        <th class="w-8">Students</th>
                        <th class="w-10">Start date</th>
                        <th class="w-10">End date</th>
                        <th class="w-6">Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCourses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>
                                {{ $course->name }}
                            </td>
                            @if ($course->teacher)
                                <td class="project-people">
                                    <img alt="image" class="img-circle"
                                         src="{{asset(Config::get('app.avatar_path') . $course->teacher->image)}}">
                                    <div class="people-name">
                                        <strong>{{$course->teacher->name}}</strong>
                                    </div>
                                </td>
                            @else
                                <td></td>
                            @endif

                            <td class="text-center">
                                {{ $course->course_type->name }}
                            </td>
                            <td class="text-center">
                                {{ $course->price }}$
                            </td>
                            <td class="text-center">
                                {{ $course->num_students . "/" . $course->max_students }}
                            </td>
                            <td class="text-center">
                                {{ date('d-m-Y', strtotime($course->start_at)) }}
                            </td>
                            <td class="text-center">
                                {{ date('d-m-Y', strtotime($course->end_at)) }}
                            </td>
                            <td>
                                @if($course->public)
                                    <span class="label label-primary">Public</span>
                                @else
                                    <span class="label label-default">Private</span>
                                @endif

                            </td>
                            <td class="project-actions">
                                {{--<a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>--}}
                                <a href="{{route('admin.courses.lessons', $course->id)}}" class="btn btn-white btn-sm">Lessons
                                </a>
                                <a href="{{route('admin.courses.edit', $course->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button end-point="{{route('admin.courses.destroy', $course->id)}}"
                                        record-name="{{$course->name}}" class="btn btn-danger btn-sm btn-delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listCourses->appends(Request::only('q'))->links('admin.vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $(function () {
            $('.btn-delete').on('click', function () {
                var name = $(this).attr('record-name');
                var endPoint = $(this).attr('end-point');
                swal({
                    title: 'Are you sure?',
                    text: 'Deleting ${name}'.fillData({name: name}),
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                })
                    .then(function (willDelete) {
                        if (willDelete) {
                            //ajax to delete here
                            deleteRecord(this, name, endPoint);
                        }
                    });
            })
        });

        function deleteRecord(button, name, endPoint) {
            $.ajax({
                url: endPoint,
                method: 'POST',
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                dataType: 'json'
            })
                .then(function(res) {
                    if (res.success) {
                        swal('Poof! ${name} has been deleted!'.fillData({name: name}), {
                            icon: "success"
                        });
                        $(button).closest('tr').remove();
                    } else {
                        swal({
                            title: 'An error occured',
                            text: 'Try again later',
                            icon: 'error'
                        })
                    }
                });
        }
    </script>
@endsection