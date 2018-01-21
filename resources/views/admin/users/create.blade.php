@extends('master')
@section('content')
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Create new user</h2>
                </div>
                <form method="POST" action="{{ route('Admin') }}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <div class="input-box">
                            <label>Name <span class="require-color">*</span></label>
                            <input data-validation="required" type="text"
                                   class="{{ $errors->has('name') ? ' has-error' : '' }}"
                                   name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Email <span class="require-color">*</span></label>
                            <input data-validation="required" type="email"
                                   class="{{ $errors->has('email') ? ' has-error' : '' }}"
                                   name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Birthday</label>
                            <input type="date" class="{{ $errors->has('birthday') ? ' has-error' : '' }}"
                                   name="birthday" value="{{ old('birthday') }}">
                            @if ($errors->has('birthday'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Phone </label>
                            <input type="text"
                                   class="{{ $errors->has('phone') ? ' has-error' : '' }}"
                                   name="phone" value="{{ old('phone') }}"/>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Address </label>
                            <input type="text"
                                   class="{{ $errors->has('address') ? ' has-error' : '' }}"
                                   name="address" value="{{ old('address') }}"/>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="submit-slide">
                            <button type="submit" class="btn btn-block">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection