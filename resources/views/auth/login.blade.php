@extends('layouts.index')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                  <h2>Login to your account</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="E-Mail" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input placeholder="Password"  id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox" style="margin-left:-13px" >
                                    <span>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Keep me signed in
                                    </span>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                              <div class="col-md-3" style="margin-left:-13px">
                                <button type="submit" class="btn btn-default">
                                    Login
                                </button>
                              </div>
                              <div class="col-md-4">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <br>Forgot Your Password?
                                </a>
                              </div>
                            </div>
                    </form>
                </div>
        </div>
        <div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
                <div class="col-md-4 signup-form">
                  <h2>New User Signup!</h2>
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input placeholder="Name" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input placeholder="E-Mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group">
                                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>

                                        <button style="margin-left:-13px" type="submit" class="btn btn-default">
                                            Register
                                        </button>
                            </form>
                </div>
    </div>
</div>
@endsection
