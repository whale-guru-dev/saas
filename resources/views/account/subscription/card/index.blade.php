@extends('account.layouts.default')
@section('title', trans('saas.menu.update_card'))
@section('account.content')

    <h6>@lang('saas.menu.update_card')</h6>

    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.subscription.card.store') }}"method="post" id="card-form">
                @csrf

                <div class="alert alert-outline-default">
                    @lang('saas.your_new_cad_will_be_used_for_future_payments')
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" id="update">
                            @lang('saas.update')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script>
        let handler = StripeCheckout.configure({
            key: '{{ config('services.stripe.key') }}',
            locale: 'auto',
            token: function (token) {
                let form = $('#card-form');

                $('#update').prop('disabled', true);

                $('<input>').attr({
                    type: 'hidden',
                    name: 'token',
                    value: token.id
                }).appendTo(form);

                form.submit();
            }
        });

        $('#update').click(function (e) {
            handler.open({
                name: '{{ config('saas.stripe.name') }}',
                currency: '{{ config('saas.stripe.currency') }}',
                key: '{{ config('services.stripe.key') }}',
                email: '{{ auth()->user()->email }}',
                panelLabel: '@lang('saas.update_card')'
            });

            e.preventDefault();
        })
    </script>
@endsection