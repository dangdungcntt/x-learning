<header id="header">
    <div class="container">
        <nav id="nav-main">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="cart-box">
                    <a href="cart.html">
                        <i class="fa fa-shopping-basket"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @can('Admin', auth()->user())
                            <li class="{{ $active['admin-menu'] }} mega-menu sub-menu">
                            <a href="/admin">Admin menu</a>
                            <div class="menu-view">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="menu-title">Courses</div>
                                        <ul>
                                            <li>
                                                <a href="/admin/courses/create">Add new course</a>
                                            </li>
                                            <li>
                                                <a href="/admin/courses">List Courses</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="menu-title">Users</div>
                                        <ul>
                                            <li>
                                                <a href="/admin/users/create">Add new user</a>
                                            </li>
                                            <li>
                                                <a href="/admin/users">List users</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="menu-title">Orders</div>
                                        <ul>
                                            <li>
                                                <a href="/admin/orders/create">Add new order</a>
                                            </li>
                                            <li>
                                                <a href="/admin/orders">List orders</a>
                                            </li>
                                            {{--<li>--}}
                                            {{--<a href="quiz-result.html">NODEJS</a>--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="menu-title">Coupons</div>
                                        <ul>
                                            <li>
                                                <a href="/admin/coupons/create">Add new coupon</a>
                                            </li>
                                            <li>
                                                <a href="/admin/coupons">List coupons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endcan
                        <li class="{{ $active['courses'] }} mega-menu sub-menu">
                            <a href="/courses">Courses</a>
                            <div class="menu-view">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="menu-title">Front-end</div>
                                        <ul>
                                            <li>
                                                <a href="courses-gride.html">Web basic</a>
                                            </li>
                                            <li>
                                                <a href="courses-gride-sideBar.html">HTML5/CSS3</a>
                                            </li>
                                            <li>
                                                <a href="courses-list.html">ReactJS</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="menu-title">Back-end</div>
                                        <ul>
                                            <li>
                                                <a href="quiz-intro.html">PHP/MYSQL</a>
                                            </li>
                                            <li>
                                                <a href="quiz.html">ASP.NET</a>
                                            </li>
                                            <li>
                                                <a href="quiz-result.html">NODEJS</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 menu-courses">
                                        <div class="menu-title">Popular Courses</div>
                                        <div class="courses-slide">
                                            <div class="img">
                                                <img src="images/blog/post-img1.jpg" alt="">
                                            </div>
                                            <div class="name">
                                                <a href="courses-gride.html">Business Management</a>
                                            </div>
                                            <div class="price">$500</div>
                                        </div>
                                        <div class="courses-slide">
                                            <div class="img">
                                                <img src="images/blog/post-img2.jpg" alt="">
                                            </div>
                                            <div class="name">
                                                <a href="courses-gride.html">Computing Science</a>
                                            </div>
                                            <div class="price">$255</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="{{ $active['instructors'] }}">
                            <a href="/instructors">Instructors </a>
                        </li>

                        <li class="{{ $active['contact'] }}">
                            <a href="/contact">Contact us </a>
                        </li>
                        <li class="{{ $active['teaching'] }}">
                            <a href="/teaching">Become an Instructor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>