@extends('admin.master')

@section('title', 'All users')

@section('style')
    <style>
        .project-people {
            display: flex;
        }

        .project-people img {
            display: flex;
            /*flex: none;*/
        }

        .project-people .people-name {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            padding-left: 5px;
        }

        table th:last-child {
            text-align: center;
        }
    </style>
@endsection

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>All users</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.users.index')}}">Users</a>
                </li>
                <li class="active">
                    <strong>All users</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-xs">Add new user</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                            class="fa fa-refresh"></i> Refresh
                                </button>
                            </div>
                            <div class="col-md-11">
                                <div class="input-group"><input type="text" placeholder="Search"
                                                                class="input-sm form-control"> <span
                                            class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                            </div>
                        </div>

                        <div class="project-list">

                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Skype</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="project-people">
                                        <img alt="image" class="img-circle" src="{{asset('images/a6.jpg')}}">
                                        <div class="people-name">
                                            <strong>Nguyen Dang Dung</strong>
                                            <small>11-11-1997</small>
                                        </div>
                                    </td>
                                    <td>
                                        01689798731
                                    </td>
                                    <td>
                                        dangdungcntt
                                    </td>
                                    <td class="project-status">
                                        <span class="label label-primary">Active</span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td class="project-people">
                                        <img alt="image" class="img-circle" src="{{asset('images/a6.jpg')}}">
                                        <div class="people-name">
                                            <strong>Nguyen Dang Dung</strong>
                                            <small>11-11-1997</small>
                                        </div>
                                    </td>
                                    <td>
                                        01689798731
                                    </td>
                                    <td>
                                        dangdungcntt
                                    </td>
                                    <td class="project-status">
                                        <span class="label label-default">Unactive</span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection