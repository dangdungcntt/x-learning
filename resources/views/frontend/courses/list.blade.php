@extends('frontend.master')

@section('title', 'All Courses')

@section('content')
    <section class="courses-view list-view">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="right-slide left">
                        <h3>Catagories</h3>
                        <ul class="catagorie-list">
                            <li>
                                <a href="#">Computer Sciences</a>
                            </li>
                            <li>
                                <a href="#">Business &amp; Management</a>
                            </li>
                            <li>
                                <a href="#">Biology &amp; Life Sciences</a>
                            </li>
                            <li>
                                <a href="#">Software Engineering</a>
                            </li>
                            <li>
                                <a href="#">Music, Film And Audio</a>
                            </li>
                        </ul>
                        <h3>Price</h3>
                        <div class="filter-blcok">
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-01">
                                    <input id="checkbox-01" type="checkbox"> Free</label>
                            </div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-02">
                                    <input id="checkbox-02" type="checkbox"> Paid</label>
                            </div>
                        </div>
                        <h3>Language</h3>
                        <div class="filter-blcok">
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-03">
                                    <input id="checkbox-03" type="checkbox"> Chinese</label>
                            </div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-04">
                                    <input id="checkbox-04" type="checkbox"> English</label>
                            </div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-05">
                                    <input id="checkbox-05" type="checkbox"> French</label>
                            </div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-06">
                                    <input id="checkbox-06" type="checkbox"> Portuguese</label>
                            </div>
                        </div>
                        <h3>Related Courses</h3>
                        <div class="recent-post">
                            <div class="post-slide">
                                <div class="img">
                                    <img src="images/blog/post-img1.jpg" alt="">
                                </div>
                                <p>
                                    <a href="#">when an unknown printer took a galley of type and scrambled</a>
                                </p>
                                <div class="date">$200</div>
                            </div>
                            <div class="post-slide">
                                <div class="img">
                                    <img src="images/blog/post-img2.jpg" alt="">
                                </div>
                                <p>
                                    <a href="#">when an unknown printer took a galley of type and scrambled</a>
                                </p>
                                <div class="date">FREE</div>
                            </div>
                            <div class="post-slide">
                                <div class="img">
                                    <img src="images/blog/post-img3.jpg" alt="">
                                </div>
                                <p>
                                    <a href="#">when an unknown printer took a galley of type and scrambled</a>
                                </p>
                                <div class="date">$78</div>
                            </div>
                        </div>

                        <h3>Keywords</h3>
                        <ul class="keyword-list">
                            <li>
                                <a href="#">Html</a>
                            </li>
                            <li>
                                <a href="#">Boostrap</a>
                            </li>
                            <li>
                                <a href="#">Css3</a>
                            </li>
                            <li>
                                <a href="#">Jquery</a>
                            </li>
                            <li>
                                <a href="#">Student</a>
                            </li>
                            <li>
                                <a href="#">Html</a>
                            </li>
                            <li>
                                <a href="#">Boostrap</a>
                            </li>
                            <li>
                                <a href="#">Css3</a>
                            </li>
                            <li>
                                <a href="#">Jquery</a>
                            </li>
                            <li>
                                <a href="#">Student</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="filter-row">
                        <div class="view-type">
                            <a href="/courses">
                                <i class="fa fa-th-large"></i>
                            </a>
                            <a href="/courses?s=list" class="active">
                                <i class="fa fa-list"></i>
                            </a>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <input type="submit" value="">
                        </div>
                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img4.jpg" alt="">
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                            <div class="price">$23</div>
                        </div>
                        <div class="info">
                            <div class="name">Basic Time Management Course</div>
                            <div class="expert">
                                <span>By </span> Michael Windzor
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img5.jpg" alt="">
                            <div class="price free">free</div>
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name">Introduction to Mobile Apps Development</div>
                            <div class="expert">
                                <span>By </span> Michael Windzor
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details-free.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img6.jpg" alt="">
                            <div class="price">$23</div>
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name">Lorem Ipsum is simply dummy</div>
                            <div class="expert">
                                <span>By </span> text of the printing
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img7.jpg" alt="">
                            <div class="price">$78</div>
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name">Lorem Ipsum has been the</div>
                            <div class="expert">
                                <span>By </span> unknown printer
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img5.jpg" alt="">
                            <div class="price free">free</div>
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name">Introduction to Mobile Apps Development</div>
                            <div class="expert">
                                <span>By </span> Michael Windzor
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details-free.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-post">
                        <div class="img">
                            <img src="images/courses/courses-img6.jpg" alt="">
                            <div class="price">$23</div>
                            <div class="icon">
                                <a href="/courses/1">
                                    <img src="images/book-icon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name">Lorem Ipsum is simply dummy</div>
                            <div class="expert">
                                <span>By </span> text of the printing
                            </div>
                            <div class="product-footer">
                                <div class="comment-box">
                                    <div class="box">
                                        <i class="fa fa-users"></i>35 Enrolled
                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="fill" style="width:45%"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy </p>
                                <div class="view-btn2">
                                    <a href="course-details.html" class="btn2">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li class="next">
                                <a href="#">
                                    <i class="fa fa-angle-left"></i>
                                    <span>Next</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li class="prev">
                                <a href="#">
                                    <span>prev</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection