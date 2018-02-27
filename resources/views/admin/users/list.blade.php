@extends('admin.master')

@section('title', 'All users')

@section('style')
    <style>
        table td:last-child, table th:last-child {
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
    <div class="ibox">
        <div class="ibox-title">
            @if(!empty($noti))
                <h5>{!! $noti !!}</h5>
            @endif

            <div class="ibox-tools">
                <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-xs">Add new user</a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row m-b-sm m-t-sm">
                <div class="col-md-1">
                    <a href="{{route("admin.users.index")}}" class="btn btn-white btn-sm">
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
                        <th style="width: 1px">ID</th>
                        <th style="width: 230px">Name</th>
                        <th style="width: 100px">Type</th>
                        <th style="width: 200px">Email</th>
                        <th style="width: 130px">Phone</th>
                        <th style="width: 130px">Skype</th>
                        <th style="width: 130px">Facebook</th>
                        <th style="">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUsers as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td class="project-people">
                                <img alt="image" class="img-circle"
                                     src="{{asset(Config::get('app.avatar_path') . $user->image)}}">
                                <div class="people-name">
                                    <strong>{{$user->name}}</strong>
                                    <small>{{date('d/m/Y', strtotime($user->birthday))}}</small>
                                </div>
                            </td>
                            <td>
                                @if($user->is_teacher)
                                    <span class="badge badge-primary">Teacher</span>
                                @else
                                    <span class="badge">Student</span>
                                @endif
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td>
                                {{$user->socials->skype ?? ''}}
                            </td>
                            <td>
                                {{$user->socials->facebook ?? ''}}
                            </td>
                            <td class="project-actions">
                                {{--<a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>--}}
                                <a href="{{route("admin.users.edit", $user->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button end-point="{{route('admin.users.destroy', $user->id)}}"
                                        record-name="{{$user->name}}" class="btn btn-danger btn-sm btn-delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listUsers->appends(Request::only('q'))->links('admin.vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        let csrf_token = "{{csrf_token()}}";

        $(function () {
            $('.btn-delete').on('click', function (e) {
                let name = $(this).attr('record-name');
                let endPoint = $(this).attr('end-point');
                swal({
                    title: `Are you sure?`,
                    text: `Deleting ${name}`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
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
                .then(res => {
                    if (res.success) {
                        swal(`Poof! ${name} has been deleted!`, {
                            icon: "success",
                        });
                        $(button).closest('tr').remove();
                    } else {
                        swal({
                            title: `An error occured`,
                            text: `Try again later`,
                            icon: "error",
                        })
                    }
                });
        }
    </script>
@endsection