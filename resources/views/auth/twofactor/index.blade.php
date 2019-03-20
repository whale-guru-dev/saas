@extends('layouts.app')
@section('title', trans('saas.menu.two_factor_auth'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">@lang('saas.menu.two_factor_auth')</div>
                    <div class="card-body">

                        <form action="{{ route('login.twofactor.verify') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="token" class="col-md-4 col-form-label text-md-right">@lang('saas.token')</label>

                                <div class="col-md-6">
                                    <input id="token" type="number" class="form-control{{ $errors->has('token') ? ' is-invalid' : '' }}" name="token" required>

                                    @if ($errors->has('token'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('token') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('saas.login')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
