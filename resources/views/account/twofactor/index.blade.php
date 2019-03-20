@extends('account.layouts.default')
@section('title', trans('saas.menu.two_factor_auth'))
@section('account.content')

    <h6>@lang('saas.menu.two_factor_auth')</h6>

    <div class="card card-default">
        <div class="card-body">
            @if (auth()->user()->twoFactorEnabled())
                <p>@lang('saas.two_factor_auth_is_enabled')</p>

                <form action="{{ route('account.twofactor.destroy') }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-dark">
                                @lang('saas.disable')
                            </button>
                        </div>
                    </div>
                </form>
            @else
                @if (auth()->user()->twoFactorPendingVerification())
                    <form action="{{ route('account.twofactor.verify') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="token" class="col-md-4 col-form-label text-md-right">@lang('saas.verify_token')</label>

                            <div class="col-md-6">
                                <input id="token" type="number" class="form-control form-control-alternative {{ $errors->has('token') ? ' is-invalid' : '' }}" name="token" required>

                                @if ($errors->has('token'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('token') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-def">
                                    @lang('saas.verify')
                                </button>
                            </div>
                        </div>
                    </form>

                    <hr>

                    <form action="{{ route('account.twofactor.destroy') }}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-danger">
                                    @lang('saas.cancel_verification')
                                </button>
                            </div>
                        </div>
                    </form>
                @else
                    <form action="{{ route('account.twofactor.store') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="dial_code" class="col-md-4 col-form-label text-md-right">@lang('saas.dialling_code')</label>

                            <div class="col-md-6">
                                <select name="dial_code" id="dial_code" class="form-control{{ $errors->has('dial_code') ? ' is-invalid' : '' }}">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->dial_code }}">{{ $country->name }} (+{{ $country->dial_code }})</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('dial_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dial_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">@lang('saas.phone')</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" required>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('saas.enable')
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            @endif
        </div>
    </div>
@endsection
