@extends('master')
@section('content')
    <section class="login-view">
        <div class="container">
            <p class="row">
            <div class="section-title">
                <h2>List users</h2>
            </div>
            <div class="submit-slide">
                <a href="{{route('admin.users.create')}}" class="btn btn-sm">Add new user</a>
            </div>
            <table class="table table-bordered table-responsive table-striped table-hover">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th colspan="3">Action</th>
                </thead>
                <tbody>
                <tr>
                    @foreach($listUsers as $user)
                        <td style="width: 40px">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        <td style="width: 60px">
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDetails">
                                Detail
                            </button>
                        </td>
                        <td style="width: 60px">
                            <a href="{{action('Admin\UserAdminController@edit',$user->id)}}"
                               class="btn btn-primary btn-sm">
                                Edit
                            </a>
                        </td>
                        <td style="width: 60px">
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div id="modalDetails" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection