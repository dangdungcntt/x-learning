@extends('frontend.master')

@section('style')
    <style>
        .time-start, .time-start:hover {
            padding: 0 10px;
            margin-bottom: 12px;
            background: #c0c0c0;
            border-radius: 4px;
            color: #fff;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            min-width: 55px
        }

        .live {
            background-color: #fe5969
        }

        .live:hover {
            background-color: #f18282;
        }

        .incoming {
            background-color: #2dfd40
        }

        .incoming:hover {
            background-color: #92f158
        }
    </style>
@endsection

@section('content')
    <div class="user-dashboard">
        <div class="container">
            <div class="col-md-8">
                <div class="section-title">
                    <h2>
                        My Courses
                    </h2>
                </div>
                <div class="archived-course">
                    <div class="course-list">
                        <div class="img">
                            <img alt="" src="#">
                        </div>
                        <div class="info">
                            <div class="name">
                                Basic Time Management Course
                            </div>
                            <div class="date">
                                Ended - Jul 08, 2016
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen
                                book.
                            </p>
                            <div class="btn-block">
                                <a class="btn" href="#">
                                    Go to classroom
                                </a>
                                <a class="btn" href="#">
                                    Course home
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li class="next">
                                <a href="#">
                                    <i class="fa fa-angle-left">
                                    </i>
                                    <span>
                                    Prev
                                </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    4
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#">
                                <span>
                                    Next
                                </span>
                                    <i class="fa fa-angle-right">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-slide">
                <h3>
                    Coming Lessons
                </h3>
                <div class="recent-post">
                    <div class="post-slide" style="display: flex;">
                        <div class="img" style="display: flex;">
                            <img alt="" src="#">
                        </div>
                        <div style="flex: 1">
                            <div class="date">
                                <a href="{{ route('lessons.play', 1) }}">
                                    Lesson 1: Hello world
                                </a>
                            </div>
                            <p>
                                <a href="{{ route('courses.show', 1) }}">
                                    Course: Fullstack developer
                                </a>
                            </p>
                        </div>
                        <a href="{{ route('lessons.play', 1) }}" class="time-start ended">
                            6:00
                            <div>
                                3/3
                            </div>
                        </a>
                    </div>
                    <div class="post-slide" style="display: flex;">
                        <div class="img" style="display: flex;">
                            <img alt="" src="#">
                        </div>
                        <div style="flex: 1">
                            <div class="date">
                                <a href="{{ route('lessons.play', 1) }}">
                                    Lesson 1: Hello World
                                </a>
                            </div>
                            <p>
                                <a href="{{ route('courses.show', 1) }}">
                                    Course: REST API with expressjs
                                </a>
                            </p>
                        </div>
                        <a href="{{ route('lessons.play', 1) }}" class="time-start live">
                            8:00
                            <div>
                                3/3
                            </div>
                        </a>
                    </div>
                    <div class="post-slide" style="display: flex;">
                        <div class="img" style="display: flex;">
                            <img alt="" src="#">
                        </div>
                        <div style="flex: 1">
                            <div class="date">
                                <a href="{{ route('lessons.play', 1) }}">
                                    Lesson 1: Hello World
                                </a>
                            </div>
                            <p>
                                <a href="{{ route('courses.show', 1) }}">
                                    Course: PHP/MYSQL
                                </a>
                            </p>
                        </div>
                        <a href="{{ route('lessons.play', 1) }}" class="time-start incoming">
                            15:00
                            <div>
                                3/3
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
