<nav class="navbar navbar-expand-lg nav-main navbar-dark">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo.svg') }}" alt="logo" class="logo">
    </a>
    <button class="navbar-toggler toggler-main" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Programs
                </a>
                <div class="dropdown-menu dropdown-prog  " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bachelors’s degree</a>
                    <a class="dropdown-item" href="#">Master’s degree</a>
                    <a class="dropdown-item" href="#">Foundation year</a>
                    <a class="dropdown-item" href="#">Language courses</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('university-page') }}">{{__('messages.Universities')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">{{__('messages.Scholarships')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('messages.Countries')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">{{__('messages.Blog')}}</a>
            </li>
            <li class="nav-item">
                {{--<a class="nav-link" href="{{ url('login') }}">{{__('messages.SIGN IN/REGISTER')}}</a>--}}
                <a class="nav-link nav-link-modal" data-toggle="modal" data-target="#exampleModalCenter">
                    {{__('messages.SIGN IN/REGISTER')}}
                </a>
            </li>
            <li class="nav-item dropdown cursor-pointer">
                @if(\App::getLocale() == "en")
                <a class="nav-link dropdown-toggle" id="" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('img/eng.svg') }}" alt="eng" class="">
                </a>
                @else
                    <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/turk.svg') }}" alt="turk" class="">
                    </a>
                @endif
                <div class="dropdown-menu dropdown-lang" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/locate/en">
                        <img src="{{ asset('img/eng.svg') }}" alt="eng" class="mr-2">{{__('messages.English')}}</a>
                    <a class="dropdown-item" href="/locate/tur">
                        <img src="{{ asset('img/turk.svg') }}" alt="turk" class="mr-2">{{__('messages.Türkiye')}}</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-0">
            {{--<div class="modal-header">--}}

            {{--</div>--}}
            <div class="modal-body p-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="wrap-close-auth">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                            </div>
                            <nav class="nav-auth">
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
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('email') ? ' is-invalid' : '' }}" id="" aria-describedby="inputGroupPrepend" required autofocus placeholder="Username or Email">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group justify-content-center row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend">
                                                            <i class="fas fa-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('password') ? ' is-invalid' : '' }}" id="" name="password" aria-describedby="inputGroupPrepend" required autofocus placeholder="Password">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            {{--<div class="col-md-12">--}}
                                                {{--<input id="password" type="password" class="border-auth form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">--}}

                                                {{--@if ($errors->has('password'))--}}
                                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        </div>

                                        <div class="form-group row justify-content-center ">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check pl-0">
                                                        <label class="container-checkbox-auth">
                                                            <span class="remember-me">
                                                                {{ __('Remember Me') }}
                                                            </span>
                                                            <input type="checkbox">
                                                            <span class="checkmark-auth rounded"></span>
                                                        </label>
                                                    </div>
                                                    {{--<div class="form-check">--}}
                                                        {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                                        {{--<label class="form-check-label" for="remember">--}}
                                                            {{--{{ __('Remember Me') }}--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                    <div>
                                                        <a class="btn btn-link lost-pass" href="{{ route('password.request') }}">
                                                            {{ __('Lost Your Password?') }}
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-center mb-3">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 btn-login-auth border-0">
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
                                        <div class="form-group pt-4 row justify-content-center">
                                            {{--<label for="email" class="col-sm-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  id="" aria-describedby="inputGroupPrepend" required autofocus placeholder="Username or Email">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group justify-content-center row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend">
                                                            <i class="fas fa-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('surname') ? ' is-invalid' : '' }}" id="" name="surname" aria-describedby="inputGroupPrepend" required autofocus placeholder="Surname">
                                                    @if ($errors->has('surname'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('surname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group justify-content-center row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend">
                                                            <i class="fas fa-lock" style="opacity: 0;"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('emailRegister') ? ' is-invalid' : '' }}" id="" name="emailRegister" aria-describedby="inputGroupPrepend" required autofocus placeholder="e-mail">
                                                    @if ($errors->has('emailRegister'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('emailRegister') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group justify-content-center row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-user-img" id="inputGroupPrepend">
                                                            <i class="fas fa-lock" style="opacity: 0;"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="border-left-0 form-control border-auth {{ $errors->has('passwordRegister') ? ' is-invalid' : '' }}" id="" name="passwordRegister" aria-describedby="inputGroupPrepend" required autofocus placeholder="password">
                                                    @if ($errors->has('passwordRegister'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('passwordRegister') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-center ">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="form-check pl-0">
                                                        <label class="container-checkbox-auth">
                                                            <span class="remember-me">
                                                                I'm student
                                                            </span>
                                                            <input type="checkbox" value="student">
                                                            <span class="checkmark-auth rounded"></span>
                                                        </label>
                                                    </div>
                                                    {{--<div class="form-check">--}}
                                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                                    {{--<label class="form-check-label" for="remember">--}}
                                                    {{--{{ __('Remember Me') }}--}}
                                                    {{--</label>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-12">
                                                <div class="form-check pl-0">
                                                    <label class="container-checkbox-auth">
                                                            <span class="remember-me">
                                                                I'm representative
                                                            </span>
                                                        <input type="checkbox" value="representative">
                                                        <span class="checkmark-auth rounded"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-link lost-pass" href="">
                                                        {{ __('Already registred?') }}
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row justify-content-center mb-3">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 btn-login-auth border-0">
                                                    {{ __('Register') }}
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
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}

            {{--</div>--}}
        </div>

    </div>

</div>