<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="{{asset('images/profile_small.jpg')}}">
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">David Williams</strong>
                            </span>
                            <span class="text-muted text-xs block">
                                Art Director
                                <b class="caret"></b>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">ITC</div>
            </li>
            <li class="{{$active['dashboard']}}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{$active['transactions']}}">
                <a href="{{route('admin.transactions')}}">
                    <i class="fa fa-dollar"></i>
                    <span class="nav-label">Transactions</span>
                </a>
            </li>
            <li class="{{$active['courses']}}">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="nav-label">Courses</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['courses/create']}}">
                        <a href="{{route('admin.courses.create')}}">Add new course</a>
                    </li>
                    <li class="{{$active['courses/index']}}">
                        <a href="{{route('admin.courses.index')}}">All courses</a>
                    </li>
                    <li class="{{$active['courses/types']}}">
                        <a href="#">Types <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse" aria-expanded="true" style="">
                            <li {{$active['courses/types/create']}}>
                                <a href="{{route('admin.courses.types.create')}}">Add course type</a>
                            </li>
                            <li class="{{$active['courses/types/index']}}">
                                <a href="{{route('admin.courses.types.index')}}">All course type</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li class="{{$active['lessons']}}">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span class="nav-label">Lessons</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['lessons/create']}}">
                        <a href="{{route('admin.lessons.create')}}">Add new lesson</a>
                    </li>
                    <li class="{{$active['lessons/index']}}">
                        <a href="{{route('admin.lessons.index')}}">All lessons</a>
                    </li>
                </ul>
            </li>
            <li class="{{$active['users']}}">
                <a href="#">
                    <i class="fa fa-group"></i>
                    <span class="nav-label">Users</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['users/create']}}">
                        <a href="{{route('admin.users.create')}}">Add new user</a>
                    </li>
                    <li class="{{$active['users/index']}}">
                        <a href="{{route('admin.users.index')}}">All users</a>
                    </li>
                </ul>
            </li>
            <li class="{{$active['orders']}}">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-label">Orders</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['orders/create']}}">
                        <a href="{{route('admin.orders.create')}}">Add new order</a>
                    </li>
                    <li class="{{$active['orders/index']}}">
                        <a href="{{route('admin.orders.index')}}">All orders</a>
                    </li>
                </ul>
            </li>
            <li class="{{$active['coupons']}}">
                <a href="#">
                    <i class="fa fa-ticket"></i>
                    <span class="nav-label">Coupons</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['coupons/create']}}">
                        <a href="{{route('admin.coupons.create')}}">Add new coupon</a>
                    </li>
                    <li class="{{$active['coupons/index']}}">
                        <a href="{{route('admin.coupons.index')}}">All coupons</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>