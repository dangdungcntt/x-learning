@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Monthly</span>
                    <h5>Income</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">40 886,200</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                    </div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Annual</span>
                    <h5>Orders</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">275,800</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                    </div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">Today</span>
                    <h5>Vistits</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">106,120</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                    </div>
                    <small>New visits</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">Low value</span>
                    <h5>User activity</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">80,600</h1>
                    <div class="stat-percent font-bold text-danger">38% <i
                                class="fa fa-level-down"></i>
                    </div>
                    <small>In first month</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Time line</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content inspinia-timeline scroll-slim">

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-briefcase"></i>
                                6:00 am
                                <br>
                                <small class="text-navy">2 hour ago</small>
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p>Course 2</p>

                                <p>Course 2</p>

                                <p>Course 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-briefcase"></i>
                                6:00 am
                                <br>
                                <small class="text-navy">2 hour ago</small>
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p>Course 2</p>

                                <p>Course 2</p>

                                <p>Course 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-briefcase"></i>
                                6:00 am
                                <br>
                                <small class="text-navy">2 hour ago</small>
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p>Course 2</p>

                                <p>Course 2</p>

                                <p>Course 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-briefcase"></i>
                                6:00 am
                                <br>
                                <small class="text-navy">2 hour ago</small>
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p>Course 2</p>

                                <p>Course 2</p>

                                <p>Course 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Read below comments and tweets</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content no-padding">
                    <ul class="list-group scroll-slim" id="comments">
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem
                                Ipsum
                                is simply dummy text of the printing and typesetting industry.</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item ">
                            <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard
                                chunk of
                                Lorem Ipsum</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem
                                Ipsum
                                is simply dummy text of the printing and typesetting industry.</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                printer took a galley </p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts
                                ago
                            </small>
                        </li>
                        <a href="#" class="next">Load more</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Transactions</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content scroll-slim" id="transactions">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover margin bottom">
                                <thead>
                                <tr>
                                    <th style="width: 1%" class="text-center">ID</th>
                                    <th>Transaction</th>
                                    <th>Details</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td> Security doors
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">16 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$483.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td> Set of tools
                                    </td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">12 Jun 2014</td>
                                    <td class="text-center"><span
                                                class="label label-warning">$125.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td> Panoramic pictures</td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">22 Jun 2013</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$344.00</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Phones</td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">24 Jun 2013</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$235.00</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Monitors</td>
                                    <td>Buy course 1</td>
                                    <td class="text-center small">26 Jun 2013</td>
                                    <td class="text-center"><span
                                                class="label label-primary">$100.00</span></td>
                                </tr>
                                <tr>
                                    <td colspan="5"><a href="#" class="next" style="display: block">Load
                                            more</a></td>
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

@section('script')
    <script>
        $(document).ready(function () {
            $('.scroll-slim').slimScroll({
                height: '400px',
                railOpacity: 0.9,
                allowPageScroll: true
            });
        })
    </script>
@endsection
