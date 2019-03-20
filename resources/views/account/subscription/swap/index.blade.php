@extends('account.layouts.default')
@section('title', trans('saas.menu.change_plan'))
@section('account.content')

    <h6>@lang('saas.menu.change_plan')</h6>

    <div class="card card-default">
        <div class="card-body">
            <p class="text-center">@lang('saas.current_plan'): {{ auth()->user()->plan->name }} ({{ auth()->user()->plan->price }} {{ config('saas.stripe.currency') }})</p>
            <form action="{{ route('account.subscription.swap.store') }}" method="post">
                @csrf

                <div class="form-group row">
                    <label for="plan" class="col-md-4 col-form-label text-md-right">@lang('saas.plan')</label>

                    <div class="col-md-6">
                        <select name="plan" id="plan" class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}">
                            @foreach ($plans as $plan)
                                <option value="{{ $plan->gateway_id }}">
                                    {{ $plan->name }} ({{ $plan->price }} {{ config('saas.stripe.currency') }})
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('plan'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('plan') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            @lang('saas.update')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
