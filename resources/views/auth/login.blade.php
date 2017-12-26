@extends('master')
@section('content')
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="section-title">
                        <h2>Login</h2>
                        <p>Login to your account below</p>
                    </div>
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-box">
                            <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="check-slide">
                            <label class="label_check" for="checkbox-01">
                                <input id="checkbox-01" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                            <div class="right-link">
                                <a href="{{ route('password.request') }}">Lost Password? </a>
                            </div>
                        </div>
                        <div class="submit-slide">
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </form>
                </div>
                {{--<form class="form-horizontal">--}}


                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="email" type="email" class="form-control" name="email"--}}
                                   {{--value="{{ old('email') }}" required autofocus>--}}

                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="password" type="password" class="form-control" name="password"--}}
                                   {{--required>--}}

                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-md-6 col-md-offset-4">--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox"--}}
                                           {{--name="remember" {{ old('remember') ? 'checked' : '' }}> Remember--}}
                                    {{--Me--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-md-8 col-md-offset-4">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Login--}}
                            {{--</button>--}}

                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--Forgot Your Password?--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
