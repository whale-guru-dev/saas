@extends('layouts.app')
@section('title', trans('saas.login'))
@section('content')

    <section class="section ">

        <div class="container bg-login ">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card  shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h3>@lang('saas.sing_in_with_credentials')</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                                <div class="form-group text-center">
                                    @if(config('services.github.client_id'))
                                        <a href="{{ url('/auth/github') }}" class="btn btn-sm btn-github"><i class="fa fa-github"></i> Github</a>
                                    @endif
                                    @if(config('services.twitter.client_id'))
                                        <a href="{{ url('/auth/twitter') }}" class="btn btn-sm btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                    @endif
                                    @if(config('services.facebook.client_id'))
                                        <a href="{{ url('/auth/facebook') }}" class="btn btn-sm btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                    @endif
                                </div>

                                @if(config('saas.demo'))
                                    <div style="padding: 10px; font-size: 14px" >

                                        <b>Demo Login:</b> wesker@laravel-bap.com <br />

                                        <b>Demo Password:</b> admin

                                    </div>
                                @endif

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.email')" id="email" type="email" class="form-control form-control-alternative {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>


                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" placeholder="@lang('saas.password')" type="password" class="form-control form-control-alternative {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span>@lang('saas.remember_me')</span>
                                    </label>
                                </div>

                                <div class="text-center">

                                    <button type="submit" class="btn btn-mg btn-primary my-4"> @lang('saas.sing_in')</button>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="{{ route('password.request') }}" class="text-light font-weight-bold">
                                @lang('saas.forgot_password')
                            </a>
                            <br />
                            <a href="{{ route('activation.resend') }}" class="text-light font-weight-bold">
                                <small>@lang('saas.resend_activation_email')</small>
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('register') }}" class="text-light font-weight-bold">
                                @lang('saas.create_new_account')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
