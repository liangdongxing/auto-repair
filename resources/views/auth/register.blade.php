@extends('layouts.app')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>汽修宝</b>商家中心</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ __('Company Register') }}</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group has-feedback{{ $errors->has('company_name') ? ' has-error' : '' }}">
                    @if ($errors->has('company_name'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('company_name') }}</label>
                        </br>
                    @endif
                    <input type="text" class="form-control" name="company_name" placeholder="{{ __('Company Name') }}" required>
                </div>

                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    @if ($errors->has('name'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('name') }}</label>
                        </br>
                    @endif
                    <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('mobile') ? ' has-error' : '' }}">
                    @if ($errors->has('mobile'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('mobile') }}</label>
                        </br>
                    @endif
                    <input type="text" class="form-control" name="mobile" placeholder="{{ __('Mobile') }}" required>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    @if ($errors->has('email'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('email') }}</label>
                        </br>
                    @endif

                    <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    @if ($errors->has('password'))
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('password') }}</label>
                        </br>
                    @endif
                    <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('captcha') ? ' has-error' : '' }}">
                    <div class="row">
                        <div class="col-xs-6">
                            @if ($errors->has('captcha'))
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('captcha') }}</label>
                                </br>
                            @endif
                            <input type="text" class="form-control" name="captcha" placeholder="验证码" required>
                        </div>
                        <div class="col-xs-6">
                            <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> {{ __('同意注册') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
            <a href="{{route('login')}}" class="text-center">已经注册</a>
        </div>
    </div>
@endsection