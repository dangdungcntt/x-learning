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
                    <strong>All course types</strong>
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
                <a href="{{route('admin.courses.types.create')}}" class="btn btn-primary btn-xs">Add course type</a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row m-b-sm m-t-sm">
                <div class="col-md-1">
                    <a href="{{route("admin.courses.types.index")}}" class="btn btn-white btn-sm">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                </div>
                <div class="col-md-11">
                    <form action="{{route('admin.courses.types.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" placeholder="Search for: id, name, details" name="q"
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCourseTypes as $courseType)
                        <tr>
                            <td>{{$courseType->id}}</td>
                            <td>
                                {{$courseType->name}}
                            </td>
                            <td>
                                {{$courseType->details}}
                            </td>
                            <td class="project-status">
                                <span class="label label-primary">Active</span>
                            </td>
                            <td class="project-actions">
                                <a href="{{route('admin.courses.types.edit', $courseType->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button end-point="{{route('admin.courses.types.destroy', $courseType->id)}}"
                                        record-name="{{$courseType->name}}" class="btn btn-danger btn-sm btn-delete"><i
                                            class="fa fa-trash"></i>
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