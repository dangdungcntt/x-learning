<header id="header">
    <div class="container">
        <nav id="nav-main">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="cart-box">
                    <a href="#">
                        <i class="fa fa-shopping-basket"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ $active['courses'] }} mega-menu sub-menu">
                            <a href="{{route('courses')}}">Courses</a>
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
                            <a href="{{route('instructors')}}">Instructors </a>
                        </li>

                        <li class="{{ $active['contact'] }}">
                            <a href="{{route('contact')}}">Contact Us </a>
                        </li>
                        <li class="{{ $active['teaching'] }}">
                            <a href="{{route('teaching')}}">Become an Instructor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>