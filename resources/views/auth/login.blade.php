@extends('layouts.app')
@section('title', '首页')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>汽修宝</b>商家中心</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ __('Login') }}</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    @if ($errors->has('email'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('email') }}</label>
                        </br>
                    @endif

                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    @if ($errors->has('password'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('password') }}</label>
                        </br>
                    @endif
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                    </div>
                </div>
            </form>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request')}}">{{ __('Forgot Your Password?') }}</a><br>
            @endif
        </div>
    </div>
@endsection
