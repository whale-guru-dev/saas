@extends('account.layouts.default')
@section('title', trans('saas.menu.resume_subscription'))
@section('account.content')

    <h6>@lang('saas.menu.resume_subscription')</h6>

    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.subscription.resume.store') }}" method="post">
                @csrf

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning">
                            @lang('saas.confirm_to_resume_your_subscription')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
