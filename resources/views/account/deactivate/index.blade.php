@extends('account.layouts.default')
@section('title', trans('saas.menu.deactivate_account'))
@section('account.content')
    <h6>@lang('saas.menu.deactivate_account')</h6>
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.deactivate.store') }}" method="post">
                @csrf

                @subscriptionnotcancelled
                    <div class="text-center">
                        <strong>@lang('saas.this_will_also_deactivate_your_subscription')</strong>
                        <br />
                        <br />
                    </div>
                @endsubscriptionnotcancelled

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-danger">
                            @lang('saas.deactivate_account')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
