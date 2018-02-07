@extends('admin.master')


@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Transactions</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard </a>
                </li>
                <li class="active">
                    <strong>Transactions</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
transactions page
@endsection
