@extends('admin.master')

@section('title', 'All orders')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>All orders</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.orders.index')}}">Orders</a>
                </li>
                <li class="active">
                    <strong>All orders</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    list
@endsection