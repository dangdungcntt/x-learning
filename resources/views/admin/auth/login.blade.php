<html>
@include('admin.layouts.head')

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">ITC</h1>

            </div>
            <h3>Admin area</h3>
            <form class="m-t" role="form" method="POST" action="{{route('admin.login')}}">
                {{ csrf_field() }}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="checkbox i-checks">
                        <label>
                            <input type="checkbox" name="remember"><i></i> Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#">
                    <small>Forgot password?</small>
                </a>
            </form>
        </div>
    </div>
    @include('admin.layouts.core-scripts')
</body>

</html>