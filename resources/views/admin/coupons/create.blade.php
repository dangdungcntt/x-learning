@extends('admin.master')

@section('title', 'Add new coupon')

@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Add new coupon</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li>
                    <a href="{{route('admin.coupons.index')}}">Coupons</a>
                </li>
                <li class="active">
                    <strong>Add new coupon</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    Create coupon
@endsection