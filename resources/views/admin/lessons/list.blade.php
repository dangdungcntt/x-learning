@extends('admin.master')

@section('title', 'All lessons')

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
            <h2>All lessons</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.lessons.index')}}">Lessons</a>
                </li>
                <li class="active">
                    <strong>All lessons</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            <h5>
                {{"Page " . $lessons->currentPage() . "/" . $lessons->lastPage()}}
                @if(!empty($noti))
                    | {!! $noti !!}
                @endif
            </h5>
            <div class="ibox-tools">
                <a href="{{route('admin.lessons.create')}}" class="btn btn-primary btn-xs">Add new lesson</a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row m-b-sm m-t-sm">
                <div class="col-md-1">
                    <a href="{{route("admin.lessons.index")}}" class="btn btn-white btn-sm">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                </div>
                <div class="col-md-11">
                    <form action="{{route('admin.lessons.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" placeholder="Search for: name, details, course name"
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
                        <th class="w-18">Name</th>
                        <th class="w-20">Details</th>
                        <th class="w-18">Course</th>
                        <th class="w-10">Start date</th>
                        <th class="w-10">End date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->id }}</td>
                            <td>
                                {{ $lesson->name }}
                            </td>
                            <td>
                                {{ $lesson->details }}
                            </td>
                            @if ($lesson->course)
                                <td>
                                    <div class="project-people">
                                        <img alt="image" class="img-circle"
                                             src="{{asset(Config::get('app.course_path') . ($lesson->course->image ?? 'default.jpg'))}}">
                                        <div class="people-name">
                                            <strong>{{$lesson->course->name}}</strong>
                                        </div>
                                    </div>
                                </td>
                            @else
                                <td></td>
                            @endif
                            <td class="text-center">
                                {{ date('d-m-Y', strtotime($lesson->start_at)) }}
                            </td>
                            <td class="text-center">
                                {{ date('d-m-Y', strtotime($lesson->end_at)) }}
                            </td>
                            {{--<td>--}}
                            {{--@if($lesson->public)--}}
                            {{--<span class="label label-primary">Public</span>--}}
                            {{--@else--}}
                            {{--<span class="label label-default">Private</span>--}}
                            {{--@endif--}}
                            {{--</td>--}}
                            <td class="project-actions">
                                {{--<a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>--}}
                                <a href="{{route('admin.lessons.edit', $lesson->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button end-point="{{route('admin.courses.destroy', $lesson->id)}}"
                                        record-name="{{$lesson->name}}" class="btn btn-danger btn-sm btn-delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $lessons->appends(Request::only('q'))->links('admin.vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection

@include('admin.script.delete-record')