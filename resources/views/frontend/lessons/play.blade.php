<html>
<head>

    <title>Lesson 1: Hello World - Fullstack developer</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link href="{{asset('css/plyr.css')}}" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            min-width: 500px;
        }

        .wrapper, .row {
            height: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .wrapper:before, .wrapper:after,
        .column:before, .column:after {
            content: "";
            display: table;
        }

        .wrapper:after,
        .column:after {
            clear: both;
        }

        .sidebar {
            float: left;
            background: #2e3d49;
            overflow-y: auto;
            width: 100%;
        }

        .sidebar--header {
            font-size: 14px;
            padding: 12px 0;
            border-bottom: 1px solid #1c262f
        }

        .sidebar--title-content {
            align-items: center;
            box-sizing: border-box;
            color: #fff;
            display: flex;
            overflow: hidden;
            width: 100%;
            font-size: 16px;
        }

        .sidebar--header:hover .back-btn{
            color: #02b3e4;
        }

        a, a:hover {
            color: #02b3e4;
            text-decoration: none;
        }

        .text--nowrap-ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .back-btn {
            padding: 15px 18px;
            /*font-size: 20px;*/
        }

        .nav-tabs {
            border:  0;
        }

        .nav-tabs>li>a {
            margin-right: 0;
            padding: 20px 25px;
            border: 0;
            font-size: 24px;
        }

        .nav-tabs>li>a:hover, .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
            background: transparent;
            border: 0;
            border-bottom: 2px #fff solid;
            color: #fff;
        }

        .tab-content .list {
            color: hsla(0,0%,100%,.5);
            padding-left: 20px;
            padding-right: 10px;
            width: 100%;
            list-style: none;
        }

        .tab-content .list a {
            color: hsla(0,0%,100%,.5);
            padding: 0.8em;
            display: block;
        }

        .tab-content .list li.active a, .tab-content .list li.active .fa-circle,
        .tab-content .list a:hover, .tab-content .list a:hover .fa-circle {
            color: #fff;
        }

        .tab-content .list li a .fas {
            /*position: absolute;*/
            /*left: -45px;*/
        }

        .fa-check, .fa-document {
            color: #02ccba;
            margin-right: 15px;
        }
        .fa-circle {
            color: #969da3;
            font-size: 11px;
            margin-left: 2px;
            margin-right: 16px;
        }

        .chat-box {
            z-index: 10;
            position: fixed;
            left: 8px;
            bottom: 45px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #1dc5a3;
            cursor: pointer;
        }

        .badge-message {
            position: absolute;
            right: -6px;
            top: -2px;
            background: red;
            width: 20px;
            font-size: 13px;
            height: 20px;
            text-align: center;
            border-radius: 50%;
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="row row-offcanvas row-offcanvas-left">
        <!-- sidebar -->
        <div class="sidebar sidebar-offcanvas" id="sidebar" style="width: 320px;display: flex;
    flex-direction: column;
    height: 100%;
    overflow: hidden;">
            <div class="sidebar--header">
                <a href="javascript: history.back()" >
                    <span class="sidebar--title-content">
                        <span class="back-btn"><i class="fas fa-chevron-left fa-2x"></i></span>
                        <span class="text--nowrap-ellipsis">
                            <span>Lesson 1:</span>
                            <span class="text--nowrap-ellipsis" style="display: block;">
                                Welcome to your free preview!
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="fas fa-book"></i>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#menu1">
                        <i class="far fa-folder"></i>
                    </a>
                </li>
            </ul>
            <div class="tab-content" style="border-top: 1px solid #1c262f;">
                <div id="home" class="tab-pane fade in active">
                    <ul class="list">
                        <li><a href="" class="text--nowrap-ellipsis">
                                <span class="fas fa-check"></span>
                                1. Lesson 1: hello world
                            </a></li>
                        <li class="active"><a href="" class="text--nowrap-ellipsis">
                                <span class="fas fa-check"></span>
                                2. Lesson 1: hello worldLesson 1: hello worldLesson 1: hello worldLesson 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-check"></span>
                                3. Lesson 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-check"></span>
                                4. Lesson 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-circle"></span>
                                5. Lesson 1: hello world</a></li>
                        <li class="active"><a href="">
                                <span class="fas fa-circle"></span>
                                6. Lesson 1: hello world</a></li>
                        <li><a href=""><span class="fas fa-circle"></span>
                                7. Lesson 1: hello world</a></li>
                    </ul>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <ul class="list">
                        <li><a href="" class="text--nowrap-ellipsis">
                                <span class="far fa-file-pdf fa-document"></span>
                                1. Document 1: hello world
                            </a></li>
                        <li class="active"><a href="" class="text--nowrap-ellipsis">
                                <span class="far fa-file-archive fa-document"></span>
                                2. Document 1: hello worldLesson 1: hello worldLesson 1: hello worldLesson 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-file-code fa-document"></span>
                                3. Document 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-book fa-document"></span>
                                4. Document 1: hello world</a></li>
                        <li><a href="">
                                <span class="fas fa-circle"></span>
                                5. Document 1: hello world</a></li>
                        <li class="active"><a href="">
                                <span class="fas fa-circle"></span>
                                6. Document 1: hello world</a></li>
                        <li><a href=""><span class="fas fa-circle"></span>
                                7. Document 1: hello world</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /sidebar -->

        <!-- main right col -->
        <div class="" id="main" style="margin-left: 320px; padding: 0">
            <div class="header text--nowrap-ellipsis" style="padding: 15px 10px; text-align: center;font-size: 20px;background: #1c262f;color: #fff">
                Welcome to preview
            </div>

            <div class="player-area" style="background: #0f1622; height: calc(100vh - 58px)">
                <video autoplay="" controls="" crossorigin="" id="player" style="height: 100%" preload="false">
                    <div class="chat-box" title="Chat box">
                        <span class="badge-message">9+</span>
                        <i class="far fa-comment-alt fa-2x" style="padding: 10px;color: #fff;"></i>
                        <div class="popup">
                            <ul class="list-messages">
                                <li class="message">Hello</li>
                                <li class="message me">Hi</li>
                                <li class="message">How are youHow are youHow are youHow are you</li>
                                <li class="message">Hello</li>
                                <li class="message me">Hi</li>
                                <li class="message">How are youHow are youHow are youHow are you</li>
                                <li class="message">Hello</li>
                                <li class="message me">Hi</li>
                                <li class="message">How are youHow are youHow are youHow are you</li>
                            </ul>
                            <div class="control">
                                <input type="text" /><i class="fab fa-pushed fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </video>
            </div>
        </div>
        <!-- /main -->
    </div>
    <style>
        .popup {
            background: #fff;
            width: 200px;
            border-radius: 4px;
            position: absolute;
            bottom: 60px;
            height: 300px
        }
        .list-messages {
            list-style: none;
            padding: 10px 0 10px 10px;
            height: 250px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .list-messages .message {
            width: 80%;
            float: left;
            background: #f1f0f0;
            border-radius: 4px;
            padding: 5px;
            margin-bottom: 5px;
            word-break: break-all;
        }
        .list-messages .message::after {
            clear: both;
            content: '';
            display: block;
        }
        .message.me {
            float: right;
            background: #02b3e4
        }
        .chat-box .control {
            padding: 5px 10px;
            background: #fff;
        }
        .control input {
            width: 150px
        } 
        .control .fa-pushed {
            vertical-align: bottom;
            margin-left: 5px
        }
    </style>
    <div class="chat-box" title="Chat box">
        <span class="badge-message">9+</span>
        <i class="far fa-comment-alt fa-2x" style="padding: 10px;color: #fff;"></i>
        <div class="popup">
            <ul class="list-messages">
                <li class="message">Hello</li>
                <li class="message me">Hi</li>
                <li class="message">How are youHow are youHow are youHow are you</li>
                <li class="message">Hello</li>
                <li class="message me">Hi</li>
                <li class="message">How are youHow are youHow are youHow are you</li>
                <li class="message">Hello</li>
                <li class="message me">Hi</li>
                <li class="message">How are youHow are youHow are youHow are you</li>
            </ul>
            <div class="control">
                <input type="text" /><i class="fab fa-pushed fa-2x"></i>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plyr.js')}}"></script>
<script src="{{asset('js/hls.js')}}"></script>
<script>
    (function () {
        var video = document.querySelector('#player');

        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource('{{asset('uploads/beach/beach.m3u8')}}');
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, function () {
                video.play();
            });
        }

        plyr.setup(video);
    })();
    $(function () {
        $('.chat-box .fa-comment-alt').click(function () {
            $('.chat-box .popup').slideToggle()
        });
    });
</script>
</body>
</html>