@extends('admin.master')

@section('title', 'Add new order')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new order</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.orders.index')}}">Orders </a>
                </li>
                <li class="active">
                    <strong>Add new order</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    add new order
@endsection
