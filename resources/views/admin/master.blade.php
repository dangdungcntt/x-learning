<!#>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>Metronic Admin Theme # | Fixed Mega Menu</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme # for " name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- <link href="{{asset('assets/css/daterangepicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/> -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('assets/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="{{asset('assets/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-menu-fixed page-md">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <!-- BEGIN HEADER -->
            <div class="page-header">
                <!-- BEGIN HEADER TOP -->
                <div class="page-header-top">
                    <div class="container">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="#">
                                <img src="{{asset('assets/img//logo-default.jpg')}}" alt="logo" class="logo-default">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="#" class="menu-toggler"></a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"
                                    id="header_notification_bar">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge badge-default">7</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="external">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px;"
                                                data-handle-color="#37283">
                                                <li>
                                                    <a href="#">
                                                        <span class="time">just now</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-success">
                                                                        <i class="fa fa-plus"></i>
                                                                    </span> New user registered. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">3 mins</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Server #2 overloaded. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">10 mins</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-warning">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span> Server # not responding. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">14 hrs</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </span> Application error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">2 days</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Database overloaded 68%. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">3 days</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> A user IP blocked. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">4 days</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-warning">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span> Storage Server # not responding dfdfdfd. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">5 days</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </span> System Error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="time">9 days</span>
                                                        <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Storage server failed. </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END NOTIFICATION DROPDOWN -->
                                <!-- BEGIN TODO DROPDOWN -->
                                <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark"
                                    id="header_task_bar">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       data-hover="dropdown" data-close-others="true">
                                        <i class="icon-calendar"></i>
                                        <span class="badge badge-default">3</span>
                                    </a>
                                    <ul class="dropdown-menu extended tasks">
                                        <li class="external">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                                data-handle-color="#37283">
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">New release v1.2 </span>
                                                                    <span class="percent">30%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 40%;"
                                                                          class="progress-bar progress-bar-success"
                                                                          aria-valuenow="40" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">40% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">Application deployment</span>
                                                                    <span class="percent">65%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 65%;"
                                                                          class="progress-bar progress-bar-danger"
                                                                          aria-valuenow="65" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">65% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">Mobile app release</span>
                                                                    <span class="percent">98%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 98%;"
                                                                          class="progress-bar progress-bar-success"
                                                                          aria-valuenow="98" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">98% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">Database migration</span>
                                                                    <span class="percent">10%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 10%;"
                                                                          class="progress-bar progress-bar-warning"
                                                                          aria-valuenow="10" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">10% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">Web server upgrade</span>
                                                                    <span class="percent">58%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 58%;"
                                                                          class="progress-bar progress-bar-info"
                                                                          aria-valuenow="58" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">58% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">Mobile development</span>
                                                                    <span class="percent">85%</span>
                                                                </span>
                                                        <span class="progress">
                                                                    <span style="width: 85%;"
                                                                          class="progress-bar progress-bar-success"
                                                                          aria-valuenow="85" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">85% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="task">
                                                                    <span class="desc">New UI release</span>
                                                                    <span class="percent">38%</span>
                                                                </span>
                                                        <span class="progress progress-striped">
                                                                    <span style="width: 38%;"
                                                                          class="progress-bar progress-bar-important"
                                                                          aria-valuenow="18" aria-valuemin="0"
                                                                          aria-valuemax="100">
                                                                        <span class="sr-only">38% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END TODO_DROPDOWN -->
                                <li class="droddown dropdown-separator">
                                    <span class="separator"></span>
                                </li>
                                <!-- BEGIN INBOX DROPDOWN -->
                                <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark"
                                    id="header_inbox_bar">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       data-hover="dropdown" data-close-others="true">
                                        <span class="circle">3</span>
                                        <span class="corner"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="external">
                                            <h3>You have
                                                <strong>7 New</strong> Messages</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                                data-handle-color="#37283">
                                                <li>
                                                    <a href="#">
                                                                <span class="photo">
                                                                    <img src="{{asset('assets/img//avatar2.jpg')}}"
                                                                         class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                                    <span class="from"> Lisa Wong </span>
                                                                    <span class="time">Just Now </span>
                                                                </span>
                                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="photo">
                                                                    <img src="{{asset('assets/img//avatar3.jpg')}}"
                                                                         class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                                    <span class="from"> Richard Doe </span>
                                                                    <span class="time">16 mins </span>
                                                                </span>
                                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="photo">
                                                                    <img src="{{asset('assets/img//avatar1.jpg')}}"
                                                                         class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                                    <span class="from"> Bob Nilson </span>
                                                                    <span class="time">2 hrs </span>
                                                                </span>
                                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="photo">
                                                                    <img src="{{asset('assets/img//avatar2.jpg')}}"
                                                                         class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                                    <span class="from"> Lisa Wong </span>
                                                                    <span class="time">40 mins </span>
                                                                </span>
                                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                                <span class="photo">
                                                                    <img src="{{asset('assets/img//avatar3.jpg')}}"
                                                                         class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                                    <span class="from"> Richard Doe </span>
                                                                    <span class="time">46 mins </span>
                                                                </span>
                                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END INBOX DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class="dropdown dropdown-user dropdown-dark">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="{{asset('assets/img//avatar9.jpg')}}">
                                        <span class="username username-hide-mobile">Nick</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> My Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-calendar"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope-open"></i> My Inbox
                                                <span class="badge badge-danger"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-rocket"></i> My Tasks
                                                <span class="badge badge-success"> 7 </span>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-lock"></i> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                    <span class="sr-only">Toggle Quick Sidebar</span>
                                    <i class="icon-logout"></i>
                                </li>
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- END HEADER TOP -->
                <!-- BEGIN HEADER MENU -->
                <div class="page-header-menu">
                    <div class="container">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <form class="search-form" action="#" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="query">
                                <span class="input-group-btn">
                                            <a href="#" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                            </div>
                        </form>
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN MEGA MENU -->
                        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                        <div class="hor-menu  ">
                            <ul class="nav navbar-nav">
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                    <a href="#"> Dashboard
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  ">
                                                <i class="icon-bar-chart"></i> Default Dashboard
                                                <span class="badge badge-success">1</span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class=" active">
                                            <a href="#" class="nav-link  active">
                                                <i class="icon-bulb"></i> Dashboard 2 </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  ">
                                                <i class="icon-graph"></i> Dashboard 3
                                                <span class="badge badge-danger">3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="#"> UI Features
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" style="min-width: 710px">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <a href="#"> Color Library </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Metronic Grid
                                                                    System </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> General Components </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Buttons </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Spinner Buttons </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Popover
                                                                    Confirmations </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap Sweet
                                                                    Alerts </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Font Icons </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Social Icons </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Typography </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Tabs, Accordions
                                                                    & Navs </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Tree View </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Google Maps </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <a href="#"> Vector Maps </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Timeline 1 </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Timeline 2 </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Horizontal
                                                                    Timeline </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Page Progress
                                                                    Bar - Flash </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Page Progress
                                                                    Bar - Big Counter </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Block UI </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap Growl
                                                                    Notifications </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Notific8 Notifications </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Toastr Notifications </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootbox Dialogs </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <a href="#"> Metronic Alerts API </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Session Timeout </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> User Idle Timeout </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Modals </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Extended Modals </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Tiles </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Date Paginator </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Nestable List </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                    <a href="#"> Layouts
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Light Mega
                                                Menu </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Light Top Bar
                                                Dropdowns </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Fluid Page </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Fixed Top Bar </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Fixed Mega
                                                Menu </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Disabled Menu
                                                Links </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="#" class="nav-link  "> Blank Page </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                    <a href="#"> Components
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <h3>Components 1</h3>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Date & Time
                                                                    Pickers </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Color
                                                                    Pickers </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Select2
                                                                    Dropdowns </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Bootstrap Multiselect Dropdowns </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Select </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Multiple Select </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <h3>Components 2</h3>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Select Splitter </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Clipboard </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Typeahead
                                                                    Autocomplete </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Tagsinput </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Switch </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Maxlength </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <h3>Components 3</h3>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    File Input </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Bootstrap
                                                                    Touchspin </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Form Widgets &
                                                                    Tools </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Context
                                                                    Menu </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Markdown & WYSIWYG
                                                                    Editors </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="mega-menu-submenu">
                                                            <li>
                                                                <h3>Components 4</h3>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Code
                                                                    Editors </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Ion Range
                                                                    Sliders </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> NoUI Range
                                                                    Sliders </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Knob Circle
                                                                    Dials </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                    <a href="#"> More
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-settings"></i> Form Stuff
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Bootstrap Form
                                                        <br>Controls </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Material Design
                                                        <br>Form Controls </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form
                                                        Validation </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Material
                                                        Design
                                                        <br>Form Validation States </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Material Design
                                                        <br>Form Validation </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form Layouts </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form Repeater </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form Input
                                                        Mask </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form X-editable </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Form Wizard </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> iCheck Controls </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Image
                                                        Cropping </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Multiple File
                                                        Upload </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Dropzone File
                                                        Upload </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-briefcase"></i> Tables
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Basic
                                                        Tables </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Responsive
                                                        Tables </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Bootstrap
                                                        Tables </a>
                                                </li>
                                                <li aria-haspopup="true" class="dropdown-submenu ">
                                                    <a href="#" class="nav-link nav-toggle"> Datatables
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Managed Datatables </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Buttons Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#"
                                                               class="nav-link "> Colreorder Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#"
                                                               class="nav-link "> Rowreorder Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Scroller Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#"
                                                               class="nav-link "> FixedHeader Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#"
                                                               class="nav-link "> Responsive Extension </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Editable Datatables </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "> Ajax
                                                                Datatables </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="?p=" class="nav-link nav-toggle ">
                                                <i class="icon-wallet"></i> Portlets
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Boxed Portlets </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Light Portlets </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Solid Portlets </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Ajax Portlets </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Draggable
                                                        Portlets </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="?p=" class="nav-link nav-toggle ">
                                                <i class="icon-settings"></i> Elements
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Steps </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Lists </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Ribbons </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Overlays </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> User Cards </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-bar-chart"></i> Charts
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> amChart </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Flot Charts </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Flow Charts </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Google Charts </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> eCharts </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> Morris Charts </a>
                                                </li>
                                                <li aria-haspopup="true" class="dropdown-submenu ">
                                                    <a href="#" class="nav-link nav-toggle"> HighCharts
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> HighCharts </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> HighStock </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> HighMaps </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                    <a href="#">
                                        <i class="icon-briefcase"></i> Pages
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-basket"></i> eCommerce
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-home"></i> Dashboard </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-basket"></i> Orders </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-tag"></i> Order View </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-graph"></i> Products </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-graph"></i> Product Edit </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-docs"></i> Apps
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-clock"></i> Todo 1 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-check"></i> Todo 2 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-envelope"></i> Inbox </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-calendar"></i> Calendar </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-notebook"></i> Support </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-user"></i> User
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-user"></i> Profile 1 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-user-female"></i> Profile 1 Account </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-user-following"></i> Profile 1 Help </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-users"></i> Profile 2 </a>
                                                </li>
                                                <li aria-haspopup="true" class="dropdown-submenu ">
                                                    <a href="#" class="nav-link nav-toggle">
                                                        <i class="icon-notebook"></i> Login
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 1 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 2 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 3 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 4 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 5 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link "
                                                               target="_blank"> Login Page 6 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link " target="_blank">
                                                        <i class="icon-lock"></i> Lock Screen 1 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link " target="_blank">
                                                        <i class="icon-lock-open"></i> Lock Screen 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-social-dribbble"></i> General
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-info"></i> About </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-call-end"></i> Contact </a>
                                                </li>
                                                <li aria-haspopup="true" class="dropdown-submenu ">
                                                    <a href="#" class="nav-link nav-toggle">
                                                        <i class="icon-notebook"></i> Portfolio
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Portfolio 1 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Portfolio 2 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Portfolio 3 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Portfolio 4 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true" class="dropdown-submenu ">
                                                    <a href="#" class="nav-link nav-toggle">
                                                        <i class="icon-magnifier"></i> Search
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="#" class="nav-link "> Search
                                                                1 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Search 2 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Search 3 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Search 4 </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="nav-link ">
                                                                Search 5 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-tag"></i> Pricing </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-wrench"></i> FAQ </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-pencil"></i> Blog </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-note"></i> Blog Post </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-envelope"></i> Invoice </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link ">
                                                        <i class="icon-envelope"></i> Invoice 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="dropdown-submenu ">
                                            <a href="#" class="nav-link nav-toggle ">
                                                <i class="icon-settings"></i> System
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "
                                                       target="_blank"> Coming Soon </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> 404 Page 1 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link " target="_blank">
                                                        404 Page 2 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link " target="_blank">
                                                        404 Page 3 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link "> 500 Page 1 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link " target="_blank">
                                                        500 Page 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END MEGA MENU -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!-- END HEADER -->
        </div>
    </div>
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            <ul class="page-breadcrumb breadcrumb">
                                <li>
                                    <a href="#">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-green-sharp">
                                                        <span data-counter="counterup" data-value="7800">0</span>
                                                        <small class="font-green-sharp">$</small>
                                                    </h3>
                                                    <small>TOTAL PROFIT</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="icon-pie-chart"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                            <span style="width: 76%;"
                                                                  class="progress-bar progress-bar-success green-sharp">
                                                                <span class="sr-only">76% progress</span>
                                                            </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> progress</div>
                                                    <div class="status-number"> 76%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-red-haze">
                                                        <span data-counter="counterup" data-value="1349">0</span>
                                                    </h3>
                                                    <small>NEW FEEDBACKS</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="icon-like"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                            <span style="width: 85%;"
                                                                  class="progress-bar progress-bar-success red-haze">
                                                                <span class="sr-only">85% change</span>
                                                            </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> change</div>
                                                    <div class="status-number"> 85%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-blue-sharp">
                                                        <span data-counter="counterup" data-value="567"></span>
                                                    </h3>
                                                    <small>NEW ORDERS</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="icon-basket"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                            <span style="width: 45%;"
                                                                  class="progress-bar progress-bar-success blue-sharp">
                                                                <span class="sr-only">45% grow</span>
                                                            </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> grow</div>
                                                    <div class="status-number"> 45%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-purple-soft">
                                                        <span data-counter="counterup" data-value="276"></span>
                                                    </h3>
                                                    <small>NEW USERS</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="icon-user"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                            <span style="width: 57%;"
                                                                  class="progress-bar progress-bar-success purple-soft">
                                                                <span class="sr-only">56% change</span>
                                                            </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> change</div>
                                                    <div class="status-number"> 57%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xs-12 col-sm-12">
                                        <!-- BEGIN PORTLET-->
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption">
                                                    <i class="icon-globe font-dark hide"></i>
                                                    <span class="caption-subject font-green-steel bold uppercase">Feeds</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <!--BEGIN TABS-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <div class="scroller" style="height: 339px;"
                                                             data-always-visible="1" data-rail-visible="0">
                                                            <div class="general-item-list">
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                                            <a href="" class="item-name primary-link">Nick Larson</a>
                                                                            <span class="item-label">3 hrs ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-success"></span> Open</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                                            <a href="" class="item-name primary-link">Mark</a>
                                                                            <span class="item-label">5 hrs ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                                            <a href="" class="item-name primary-link">Nick Larson</a>
                                                                            <span class="item-label">8 hrs ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                                            <a href="" class="item-name primary-link">Nick Larson</a>
                                                                            <span class="item-label">12 hrs ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                                    </div>
                                                                    <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                                            <a href="" class="item-name primary-link">Richard Stone</a>
                                                                            <span class="item-label">2 days ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-danger"></span> Open</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                                            <a href="" class="item-name primary-link">Dan</a>
                                                                            <span class="item-label">3 days ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="item-head">
                                                                        <div class="item-details">
                                                                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                                            <a href="" class="item-name primary-link">Larry</a>
                                                                            <span class="item-label">4 hrs ago</span>
                                                                        </div>
                                                                        <span class="item-status">
                                                                            <span class="badge badge-empty badge-success"></span> Open</span>
                                                                    </div>
                                                                    <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <div class="scroller" style="height: 290px;"
                                                             data-always-visible="1" data-rail-visible1="1">
                                                            <ul class="feeds">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New order
                                                                                        received
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 10 mins</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-danger">
                                                                                    <i class="fa fa-bolt"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Order #4DOP4 has
                                                                                    been rejected.
                                                                                    <span class="label label-sm label-danger "> Take action
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
                                            </div>
                                        </div>
                                        <!-- END PORTLET-->
                                    </div>
                                    <div class="col-lg-6 col-xs-12 col-sm-12">
                                        <!-- BEGIN PORTLET-->
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption">
                                                    <i class="icon-globe font-dark hide"></i>
                                                    <span class="caption-subject font-green-steel bold uppercase">Feeds</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <!--BEGIN TABS-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <div class="scroller" style="height: 339px;"
                                                             data-always-visible="1" data-rail-visible="0">
                                                            <ul class="feeds">
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 4 pending
                                                                                    tasks.
                                                                                    <span class="label label-sm label-info"> Take action
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New version v1.4
                                                                                        just lunched!
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 20 mins</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-danger">
                                                                                    <i class="fa fa-bolt"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Database server #2
                                                                                    overloaded. Please fix the issue.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 30 mins</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 40 mins</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-warning">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user
                                                                                    registered.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 1.5 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Web server hardware
                                                                                    needs to be upgraded.
                                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 2 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 3 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-warning">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 5 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 18 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 21 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 22 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 21 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 22 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 21 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 22 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 21 hours</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bullhorn"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received.
                                                                                    Please take care of it.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 22 hours</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <div class="scroller" style="height: 290px;"
                                                             data-always-visible="1" data-rail-visible1="1">
                                                            <ul class="feeds">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New order
                                                                                        received
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 10 mins</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-danger">
                                                                                    <i class="fa fa-bolt"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Order #4DOP4 has
                                                                                    been rejected.
                                                                                    <span class="label label-sm label-danger "> Take action
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins</div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> New user
                                                                                        registered
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
                                            </div>
                                        </div>
                                        <!-- END PORTLET-->
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="#" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
                <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                    <div class="page-quick-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                    <span class="badge badge-success">7</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-bell"></i> Alerts </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-info"></i> Notifications </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-speech"></i> Activities </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-settings"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                                     data-wrapper-class="page-quick-sidebar-list">
                                    <h3 class="list-heading">Staff</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">8</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar3.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Bob Nilson</h4>
                                                <div class="media-heading-sub"> Project Manager</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/img/avatar1.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Nick Larson</h4>
                                                <div class="media-heading-sub"> Art Director</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">3</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar4.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Hubert</h4>
                                                <div class="media-heading-sub"> CTO</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/img/avatar2.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ella Wong</h4>
                                                <div class="media-heading-sub"> CEO</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">Customers</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">2</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar6.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lara Kunis</h4>
                                                <div class="media-heading-sub"> CEO, Loop Inc</div>
                                                <div class="media-heading-small"> Last seen 03:10 AM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="label label-sm label-success">new</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar7.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                                <div class="media-heading-sub"> Project Manager,
                                                    <br> SmartBizz PTL
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/img/avatar8.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lisa Stone</h4>
                                                <div class="media-heading-sub"> CTO, Keort Inc</div>
                                                <div class="media-heading-small"> Last seen 13:10 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">7</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar9.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Portalatin</h4>
                                                <div class="media-heading-sub"> CFO, H&D LTD</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/img/avatar10.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Irina Savikova</h4>
                                                <div class="media-heading-sub"> CEO, Tizda Motors Inc</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">4</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/img/avatar11.jpg')}}"
                                                 alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Maria Gomez</h4>
                                                <div class="media-heading-sub"> Manager, Infomatic Inc</div>
                                                <div class="media-heading-small"> Last seen 03:10 AM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page-quick-sidebar-item">
                                    <div class="page-quick-sidebar-chat-user">
                                        <div class="page-quick-sidebar-nav">
                                            <a href="#" class="page-quick-sidebar-back-to-list">
                                                <i class="icon-arrow-left"></i>Back</a>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-messages">
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body"> When could you send me the report ? </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body"> Its almost done. I will be sending it shortly </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body"> Alright. Thanks! :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:16</span>
                                                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body"> No probs. Just take your time :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body"> Alright. I just emailed it to you. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body"> Great! Thanks. Will check it right away. </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body"> Please let me know if you have any comment. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                       placeholder="Type a message here...">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn green">
                                                        <i class="icon-paper-clip"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                <div class="page-quick-sidebar-alerts-list">
                                    <h3 class="list-heading">General</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 4 pending tasks.
                                                            <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> Just now</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Finance Report for year 2013 has been
                                                                released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 5 pending membership that requires a
                                                            quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received with
                                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 30 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 5 pending membership that requires a
                                                            quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Web server hardware needs to be upgraded.
                                                            <span class="label label-sm label-warning"> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 2 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> IPO Report for year 2013 has been
                                                                released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">System</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 4 pending tasks.
                                                            <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> Just now</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Finance Report for year 2013 has been
                                                                released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 5 pending membership that requires a
                                                            quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received with
                                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 30 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 5 pending membership that requires a
                                                            quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Web server hardware needs to be upgraded.
                                                            <span class="label label-sm label-default "> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 2 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> IPO Report for year 2013 has been
                                                                released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                <div class="page-quick-sidebar-settings-list">
                                    <h3 class="list-heading">General Settings</h3>
                                    <ul class="list-items borderless">
                                        <li> Enable Notifications
                                            <input type="checkbox" class="make-switch" checked data-size="small"
                                                   data-on-color="success" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                        <li> Allow Tracking
                                            <input type="checkbox" class="make-switch" data-size="small"
                                                   data-on-color="info" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                        <li> Log Errors
                                            <input type="checkbox" class="make-switch" checked data-size="small"
                                                   data-on-color="danger" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                        <li> Auto Sumbit Issues
                                            <input type="checkbox" class="make-switch" data-size="small"
                                                   data-on-color="warning" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                        <li> Enable SMS Alerts
                                            <input type="checkbox" class="make-switch" checked data-size="small"
                                                   data-on-color="success" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                    </ul>
                                    <h3 class="list-heading">System Settings</h3>
                                    <ul class="list-items borderless">
                                        <li> Security Level
                                            <select class="form-control input-inline input-sm input-small">
                                                <option value="1">Normal</option>
                                                <option value="2" selected>Medium</option>
                                                <option value="e">High</option>
                                            </select>
                                        </li>
                                        <li> Failed Email Attempts
                                            <input class="form-control input-inline input-sm input-small" value="5"/>
                                        </li>
                                        <li> Secondary SMTP Port
                                            <input class="form-control input-inline input-sm input-small" value="3560"/>
                                        </li>
                                        <li> Notify On System Error
                                            <input type="checkbox" class="make-switch" checked data-size="small"
                                                   data-on-color="danger" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                        <li> Notify On SMTP Error
                                            <input type="checkbox" class="make-switch" checked data-size="small"
                                                   data-on-color="warning" data-on-text="ON" data-off-color="default"
                                                   data-off-text="OFF"></li>
                                    </ul>
                                    <div class="inner-content">
                                        <button class="btn btn-success">
                                            <i class="icon-settings"></i> Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <!-- BEGIN FOOTER -->
            <!-- BEGIN PRE-FOOTER -->
            <div class="page-prefooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>About</h2>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                            <h2>Subscribe Email</h2>
                            <div class="subscribe-form">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" placeholder="mail@email.com" class="form-control">
                                        <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>Follow Us On</h2>
                            <ul class="social-icons">
                                <li>
                                    <a href="#" data-original-title="rss" class="rss"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="facebook" class="facebook"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="twitter" class="twitter"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="googleplus" class="googleplus"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="linkedin" class="linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="youtube" class="youtube"></a>
                                </li>
                                <li>
                                    <a href="#" data-original-title="vimeo" class="vimeo"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>Contacts</h2>
                            <address class="margin-bottom-40"> Phone: 800 123 3456
                                <br> Email:
                                <a href="mailto:info@metronic.com">info@metronic.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRE-FOOTER -->
            <!-- BEGIN INNER FOOTER -->
            <div class="page-footer">
                <div class="container"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                       title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase
                        Metronic!</a>
                </div>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
            <!-- END INNER FOOTER -->
            <!-- END FOOTER -->
        </div>
    </div>
</div>
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/js/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/quick-nav.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>