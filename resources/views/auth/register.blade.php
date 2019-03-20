@extends('layouts.app')
@section('title', trans('saas.sign_up'))
@section('content')

    <section class="section  ">

        <div class="container bg-register">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h3>@lang('saas.register')</h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.your_name')" id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                   </div>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.your_email')" id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.password')" id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.confirm_password')" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>


                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">

                                    <input class="custom-control-input form-check-input{{ $errors->has('terms') ? ' is-invalid' : '' }}" type="checkbox" id="terms" name="terms" required>
                                    <label class="custom-control-label" for="terms">
                                        @lang('saas.i_accept') <br />
                                        <a href="{{ route('info.terms') }}" target="_blank">@lang('saas.read_term_of_service')</a>
                                    </label>

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success my-4">@lang('saas.sign_up')</button>
                                </div>

                                @if(config('services.github.client_id') || config('services.github.client_id') || config('services.facebook.client_id'))
                                    <div class="text-center mb-sm-2">
                                        @lang('saas.use_social_media')
                                    </div>
                                @endif

                                <div class="form-group text-center">
                                    @if(config('services.github.client_id'))
                                        <a href="{{ url('/auth/github') }}" class="btn btn-block btn-md btn-github"><i class="fa fa-github"></i> Github</a>
                                    @endif
                                    @if(config('services.twitter.client_id'))
                                        <a href="{{ url('/auth/twitter') }}" class="btn  btn-block btn-md btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                    @endif
                                    @if(config('services.facebook.client_id'))
                                        <a href="{{ url('/auth/facebook') }}" class="btn  btn-block btn-md btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                    @endif
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 text-center">
                            <a href="{{ route('login') }}" class="text-light font-weight-bold">
                                @lang('saas.already_has_account')
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
