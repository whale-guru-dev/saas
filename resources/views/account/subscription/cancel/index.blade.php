@extends('account.layouts.default')
@section('title', trans('saas.menu.cancel_subscription'))
@section('account.content')

    <h6>@lang('saas.menu.cancel_subscription')</h6>

    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.subscription.cancel.store') }}" method="post">
                @csrf

                <p>@lang('saas.confirm_your_subscription_cancellation')</p>

                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-danger">
                            @lang('saas.cancel')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
