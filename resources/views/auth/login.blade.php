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
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-box">
                            <input type="text" class="{{ $errors->has('email') ? ' has-error' : '' }}"
                                   placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}"
                                   placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="check-slide">
                            <label class="label_check" for="checkbox-01">
                                <input id="checkbox-01" type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                            <div class="right-link">
                                <a href="{{ route('password.request') }}">Lost Password? </a>
                            </div>
                        </div>
                        <div class="submit-slide">
                            <button type="submit" class="btn">Login</button>
                            <a href="{{ route('register') }}" class="btn btn-default">Register</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
