@extends('account.layouts.default')
@section('title',trans('saas.menu.plans'))
@section('account.content')
    <h6>@lang('saas.menu.plans')</h6>
    <div class="card card-default">
        <div class="card-body">

                        @if(config('saas.demo') && config('saas.payment_gateway','') == 'stripe')
                            <div class="alert alert-outline-danger">
                                @lang('saas.stripe_test_card') <br />
                                @lang('saas.more_info') <a target="_blank" href="https://stripe.com/docs/testing">on stripe.com</a>
                            </div>
                        @endif
                            @if(config('saas.demo') && config('saas.payment_gateway','') == 'braintree')
                                <div class="alert alert-outline-danger">
                                    @lang('saas.braintree_test_card') <br />
                                    @lang('saas.more_info') <a target="_blank" href="https://developers.braintreepayments.com/guides/credit-cards/testing-go-live/php">on braintreepayments.com</a>
                                </div>
                            @endif

                        <form method="POST" action="{{ route('subscription.store') }}" id="payment-form">
                            @csrf

                            <h7>@lang('saas.payment_info')</h7>

                            <div class="form-group row">
                                <label for="plan" class="col-md-4 col-form-label text-md-right">@lang('saas.plan')</label>

                                <div class="col-md-6">
                                    <select name="plan" id="plan" class="form-control form-control-alternative  {{ $errors->has('plan') ? ' is-invalid' : '' }}">
                                        @foreach ($plans as $plan)
                                            <option data-free="{{$plan->trial}}" value="{{ $plan->gateway_id }}" {{ request('plan') === $plan->slug || old('plan') === $plan->gateway_id ? 'selected="selected"' : '' }}>
                                                {{ $plan->name }} ({{ $plan->price }}{{ config('saas.stripe.currency') }})
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

                            <div class="form-group row">
                                <label for="coupon" class="col-sm-4 col-form-label text-md-right">@lang('saas.coupon_code')</label>

                                <div class="col-md-6">
                                    <input type="text" name="coupon" id="coupon" class="form-control form-control-alternative  {{ $errors->has('coupon') ? ' is-invalid' : '' }}" value="{{ old('coupon') }}">

                                    @if ($errors->has('coupon'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coupon') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <h7>@lang('saas.account_info')</h7>

                            <hr />

                            <div class="form-group row">
                                <label for="coupon" class="col-sm-4 col-form-label text-md-right">@lang('saas.company_name')</label>

                                <div class="col-md-6">
                                    <input type="text" name="company_name" id="company_name" required="required" class="form-control form-control-alternative  {{ $errors->has('company_name') ? ' is-invalid' : '' }}" value="{{ old('company_name') }}">

                                    @if ($errors->has('company_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                    @endif

                                    <small class="form-text text-muted">
                                        @lang('saas.text.this-should-be-your-company-name')
                                    </small>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="coupon" class="col-sm-4 col-form-label text-md-right">@lang('saas.password')</label>

                                <div class="col-md-6">
                                    <input type="password" name="user_password" id="user_password" required="required" class="form-control form-control-alternative  {{ $errors->has('user_password') ? ' is-invalid' : '' }}" value="{{ old('user_password') }}">

                                    @if ($errors->has('user_email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                    @endif

                                    <small class="form-text text-muted">
                                        @lang('saas.text.enter-your-password-for-crm')
                                    </small>
                                </div>
                            </div>

                            <div id="dropin-container"></div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success" id="pay">
                                        @lang('saas.secure_payment')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
    </div>


@endsection

@section('scripts')

        <script>
            let start_free_trial_text = '@lang("saas.start_free_trial")';
            let secure_payment_text = '@lang("saas.secure_payment")';
            let free_trial = false;

            $(document).ready(function(){
               if($('#plan :selected').attr('data-free') > 0 ){
                   free_trial = true;
                   $('#pay').html(start_free_trial_text);
                   $('#dropin-container').hide();
               }

               $(document).on('change','#plan', function(){

                   if($('#plan :selected').attr('data-free') > 0 ){
                       free_trial = true;
                       $('#pay').html(start_free_trial_text);
                       $('#dropin-container').hide();
                   }else{
                       free_trial = false;
                       $('#pay').html(secure_payment_text);
                       $('#dropin-container').show();
                   }
               });
            });
        </script>

    @if(config('saas.payment_gateway','') == 'stripe')

        <script src="https://checkout.stripe.com/checkout.js"></script>
        <script>

            let handler = StripeCheckout.configure({
                key: '{{ config('services.stripe.key') }}',
                locale: 'auto',
                token: function (token) {
                    let form = $('#payment-form');

                    $('#pay').prop('disabled', true);

                    $('<input>').attr({
                        type: 'hidden',
                        name: 'token',
                        value: token.id
                    }).appendTo(form);

                    form.submit();
                }
            });

            $('#pay').click(function (e) {


                if($('#company_name').val() == '' || $('#user_password').val() == ''){

                    $.notify({

                        message: "@lang('saas.fill_crm_data')"
                    },{
                        allow_dismiss: true,
                        type:  'danger',

                        placement: {
                            from: "top",
                            align: "center"
                        },

                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                    });

                    return false;
                }


                if(!free_trial) {
                    handler.open({
                        name: '{{ config('saas.stripe.name') }}',
                        description: '{{ config('saas.stripe.description') }}',
                        currency: '{{ config('saas.stripe.currency') }}',
                        key: '{{ config('services.stripe.key') }}',
                        email: '{{ auth()->user()->email }}'
                    });

                    e.preventDefault();
                }
            })
        </script>

    @endif
    @if(config('saas.payment_gateway','') == 'braintree')

        <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>

        <script>


            var button = document.querySelector('#pay');

            braintree.setup("{{ Braintree_ClientToken::generate() }}", 'dropin', {
                container: 'dropin-container',
                onReady: function() {

                }
            });

        </script>
    @endif

@endsection
