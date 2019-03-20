@extends('layouts.app')
@section('title', 'Rest Password')
@section('content')

    <section class="section ">

        <div class="container pt-lg-md bg-login ">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card  shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h3>@lang('saas.reset_password')</h3>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

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

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">@lang('saas.submit')</button>
                                </div>
                                <br />
                                <br />
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
