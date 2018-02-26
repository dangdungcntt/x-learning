@extends('admin.master')

@section('title', 'All course types')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>All course types</h2>
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
                    <strong>All type</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            @if(!empty($noti))
                <h5>{!! $noti !!}</h5>
            @endif

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
                    <form action="{{route('admin.users.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" placeholder="Search for: name, emai, phone, skype" name="q"
                                   class="input-sm form-control">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-sm btn-primary"> Search!</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="project-list">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Start date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCourseTypes as $courseType)
                        <tr>
                            <td>1</td>
                            <td class="project-people">
                                <img alt="image" class="img-circle"
                                     src="{{asset(Config::get('app.avatar_path') . "default.jpg")}}">
                                <div class="people-name">
                                    <strong>Ten khoa hoc o day</strong>
                                </div>
                            </td>
                            <td>
                                Ten giao vien
                            </td>
                            <td>
                                Ngay bat dau
                            </td>
                            <td class="project-status">
                                <span class="label label-primary">Active</span>
                            </td>
                            <td class="project-actions">
                                {{--<a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>--}}
                                <a href="#" class="btn btn-success btn-sm"><i
                                            class="fa fa-pencil"></i> Edit
                                </a>
                                <button end-point="#"
                                        user-name="#" class="btn btn-danger btn-sm btn-delete"><i
                                            class="fa fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listCourseTypes->appends(Request::only('q'))->links('admin.vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection