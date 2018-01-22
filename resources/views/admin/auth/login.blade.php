<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin-asset/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img class="align-content" src="{{asset('admin-asset/images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{route('admin.login')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('admin-asset/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('admin-asset/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin-asset/assets/js/plugins.js')}}"></script>
<script src="{{asset('admin-asset/assets/js/main.js')}}"></script>


</body>
</html>
