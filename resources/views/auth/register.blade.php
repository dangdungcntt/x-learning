@extends('master')
@section('content')
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-title">
                        <h2>REGISTER</h2>
                        <p>Register now - Completely free</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="input-box">
                            <input type="text" class="{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Name" name="name"
                                value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="text" class="{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Re-Password" name="password_confirmation" required>
                        </div>
                        <div class="submit-slide">
                            <input type="submit" value="SIGN UP" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
