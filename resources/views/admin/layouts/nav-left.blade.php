<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" style="width: 48px; height: 48px" src="{{asset('images/profile_small.jpg')}}">
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
            <li class="{{$active['dashboard']}}">
                <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{$active['transactions']}}">
                <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Transactions</span></a>
            </li>
            <li class="{{$active['courses']}}">
                <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Courses</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['courses/create']}}"><a href="#">Add new course</a></li>
                    <li class="{{$active['lessions/create']}}"><a href="#">Add new lession</a></li>
                    <li class="{{$active['courses']}}"><a href="#">All courses</a></li>
                </ul>
            </li>
            <li class="{{$active['users']}}">
                <a href=""><i class="fa fa-group"></i> <span class="nav-label">Users</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Add new user</a></li>
                    <li class="{{$active['users']}}"><a href="{{route('admin.users.index')}}">All users</a></li>
                </ul>
            </li>
            <li class="{{$active['orders']}}">
                <a href="#"><i class="fa fa-shopping-cart"></i><span class="nav-label">Orders</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-levorderel collapse">
                    <li class="{{$active['orders/create']}}"><a href="#">Add new order</a></li>
                    <li class="{{$active['orders']}}"><a href="#">All orders</a></li>
                </ul>
            </li>
            <li class="{{$active['coupons']}}">
                <a href="#"><i class="fa fa-ticket"></i> <span class="nav-label">Coupons</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{$active['coupons/create']}}"><a href="#">Add new coupon</a></li>
                    <li class="{{$active['coupons']}}"><a href="#">All coupons</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>