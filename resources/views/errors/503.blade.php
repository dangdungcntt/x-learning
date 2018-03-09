<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from 115.160.244.10:8084/themeforest/academy/html/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Mar 2018 10:03:21 GMT -->
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->

    <!-- Title -->
    <title>Comingsoon</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    @include('frontend.layouts.main-css')

</head>

<body>
<div class="wapper">
    <header class="comming-soonHeader">
        <a href="#"><img src="{{asset('images/logo.png')}}" alt=""></a>
    </header>
    <div class="comming-soon">
        <section class="block-one">
            <div class="container">
                <div class="container-inner">
                    <h1>Our Website is Coming Soon...</h1>
                    <p>We're currently working on creating something new We'll be here soon, subscribe to be notified.</p>
                </div>
            </div>
        </section>
        <section class="block-two">
            <div class="container">
                <div class="container-inner">
                    <div class="counter-section">
                        <ul id="countdown_commigsoon">
                            <li>
                                <span class="days">00</span>
                                <p>Days</p>
                            </li>
                            <li>
                                <span class="hours">00</span>
                                <p>Hours</p>
                            </li>
                            <li>
                                <span class="minutes">00</span>
                                <p>Minutes</p>
                            </li>
                            <li>
                                <span class="seconds">00</span>
                                <p>Seconds</p>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter">
                        <h2>Our Website is under Construction. Subscribe to be notified.</h2>
                        <form>
                            <div class="form-group">
                                <label class="sr-only" for="email">&nbsp;</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email To Get Notified" data-validation="required">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                            <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                            <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                            <li><a href="#"><em class="fa fa-pinterest-p"></em></a></li>
                            <li><a href="#"><em class="fa fa-youtube-play"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('frontend.layouts.core-scripts')

<script src="{{asset('js/countdown.js')}}"></script>

<script>
    $('#countdown_commigsoon').countdown({date: "March 31, 2018"});
</script>
</body>

</html>

