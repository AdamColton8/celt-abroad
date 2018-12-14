@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 col-12">
            <nav>
                <div class="nav nav-tabs border-bottom-0 nav-login-wrap" id="nav-tab" role="tablist">
                    <a class="nav-item border-0 nav-link active nav-login rounded-0 px-4" id="nav-Login-tab" data-toggle="tab" href="#nav-Login" role="tab" aria-controls="nav-Login" aria-selected="true">Login</a>
                    <a class="nav-item border-0 nav-link nav-login rounded-0 px-4" id="nav-Register-tab" data-toggle="tab" href="#nav-Register" role="tab" aria-controls="nav-Register" aria-selected="false">Register</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active bg-white" id="nav-Login" role="tabpanel" aria-labelledby="nav-Login-tab">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group pt-4 row justify-content-center">
                            {{--<label for="email" class="col-sm-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-12 ">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username or Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group justify-content-center row">
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center ">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div>
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lost Your Password?') }}
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row justify-content-center mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 font-weight-bold">
                                    {{ __('Login') }}
                                </button>
                                <div class="dropdown-divider mt-4 mb-4"></div>
                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                                <a class="btn btn-facebook w-100 mb-3" href="#">
                                {{ __('Login with Facebook') }}
                                </a>
                                <a class="btn btn-google w-100" href="#">
                                {{ __('Login with Google') }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mb-3">
                            <div class="col-md-12">


                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-Register" role="tabpanel" aria-labelledby="nav-Register-tab">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--<div class="col-md-8">--}}
        {{--<div class="card">--}}
        {{--<div class="card-header">{{ __('Login') }}</div>--}}

        {{--<div class="card-body">--}}
        {{--<form method="POST" action="{{ route('login') }}">--}}
        {{--@csrf--}}

        {{--<div class="form-group row">--}}
        {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

        {{--<div class="col-md-6">--}}
        {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

        {{--@if ($errors->has('email'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
        {{--<strong>{{ $errors->first('email') }}</strong>--}}
        {{--</span>--}}
        {{--@endif--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group row">--}}
        {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        {{--<div class="col-md-6">--}}
        {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

        {{--@if ($errors->has('password'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
        {{--<strong>{{ $errors->first('password') }}</strong>--}}
        {{--</span>--}}
        {{--@endif--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group row">--}}
        {{--<div class="col-md-6 offset-md-4">--}}
        {{--<div class="form-check">--}}
        {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--<label class="form-check-label" for="remember">--}}
        {{--{{ __('Remember Me') }}--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group row mb-0">--}}
        {{--<div class="col-md-8 offset-md-4">--}}
        {{--<button type="submit" class="btn btn-primary">--}}
        {{--{{ __('Login') }}--}}
        {{--</button>--}}

        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
        {{--{{ __('Forgot Your Password?') }}--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
@endsection
