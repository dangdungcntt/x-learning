<!DOCTYPE html>
<html>

@include('admin.layouts.head')

<body class="fixed-nav fixed-sidebar">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg">
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b
                                            class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Transactions</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Courses</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Add new course</a></li>
                        <li><a href="#">Add new lession</a></li>
                        <li><a href="#">All courses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-group"></i> <span class="nav-label">Users</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Add new user</a></li>
                        <li><a href="#">All users</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i><span class="nav-label">Orders</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-levorderel collapse">
                        <li><a href="#">Add new order</a></li>
                        <li><a href="#">All orders</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-ticket"></i> <span class="nav-label">Coupons</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Add new coupon</a></li>
                        <li><a href="#">All coupons</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                   name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                            Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
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
                                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
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
                                            <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum
                                                is simply dummy text of the printing and typesetting industry.</p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item ">
                                            <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard chunk of
                                                Lorem Ipsum</p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum
                                                is simply dummy text of the printing and typesetting industry.</p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                            </small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown
                                                printer took a galley </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
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
                </div>
            </div>
        </div>
        <div class="footer fixed">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.core-scripts')


<script>
    $(document).ready(function () {
        $('.sidebar-collapse').slimScroll({
            height: '100%',
            railOpacity: 0.9
        });

        $('.scroll-slim').slimScroll({
            height: '400px',
            railOpacity: 0.9,
            allowPageScroll: true
        });
    });
</script>
</body>

</html>
