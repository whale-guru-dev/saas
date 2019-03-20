@extends('account.layouts.default')
@section('title', trans('saas.menu.account_overview'))
@section('account.content')


    <h6>
        @lang('saas.menu.account_overview')
    </h6>


    @if(!auth()->user()->hasSubscription())

        <div class="card card-default">
            <div class="card-body">

                <div class="p-1 text-center">
                    <p>
                        @lang('saas.click_here_and_activate_your_plan')
                    </p>
                </div>

                <div class="text-center p-2">
                    <a class="btn btn-success" href="{{ route('plans.index') }}">@lang('saas.menu.plans')</a>
                </div>

            </div>
        </div>
    @else

        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">

                <div class="card card-default">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-4">
                                <h6> @lang('saas.current_plan')</h6>

                                {{ auth()->user()->plan->name }}
                                <br />
                                <br />

                            </div>

                            <div class="col-sm-8">
                                <b>@lang('saas.next_billing_date')</b>:
                                @if(!empty($trailEndsOn))
                                    @lang('saas.your_account_is_on_trial_unit') {{ $trailEndsOn }} <br />
                                @else
                                    {{ $next_billing_date }} <br />
                                @endif

                                <b>@lang('saas.users_limit')</b>: {{ auth()->user()->plan->teams_limit }} <br/>
                                <b>@lang('saas.price')</b>: {{ auth()->user()->plan->price }} {{ config('saas.stripe.currency') }} <br />
                                <br/><br/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a target="_blank" href="{{ config('saas.application_url') }}"  class="btn btn-outline-success btn-default">@lang('saas.go_to_app')</a>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>



            <h6 class="mt-2">
                @lang('saas.invoices')
            </h6>

        <div class="row">


            <div class="col-md-12 col-lg-12 col-sm-12">

                <div class="card card-default">
                    <div class="card-body">


                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    @lang('saas.date') & @lang('saas.number')
                                </th>
                                <th>
                                    @lang('saas.payment')
                                </th>
                                <th>
                                    @lang('saas.status')
                                </th>
                                <th>

                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>
                                        <p>
                                            {{ $invoice->date()->format('Y-m-d') }} <br />
                                            @if(config('saas.payment_gateway','') == 'stripe')
                                                {{ $invoice->number }}
                                            @else
                                                {{ $invoice->id }}
                                            @endif
                                        </p>

                                    </td>
                                    <td>
                                        <p>
                                            @if(config('saas.payment_gateway','') == 'stripe')
                                                {{ number_format(($invoice->amount_paid/100),2,'.',',')}} {{ $invoice->currency }}
                                            @else
                                                {{ number_format(($invoice->amount),2,'.',',')}} {{ $invoice->currencyIsoCode }}
                                            @endif
                                        </p>

                                    </td>
                                    <td>
                                        @if(config('saas.payment_gateway','') == 'stripe')
                                            @if($invoice->paid)
                                                <span class="badge badge-success">@lang('saas.paid')</span>
                                            @else
                                                <span class="badge badge-warning">@lang('saas.pending')</span>
                                            @endif
                                        @else
                                            <span class="badge badge-success">@lang('saas.paid')</span>
                                        @endif
                                    </td>
                                    <td>

                                        @if(config('saas.payment_gateway','') == 'stripe')

                                        <a href="{{ $invoice->invoice_pdf }}" class="btn btn-sm btn-default">@lang('saas.download')</a>

                                        @else

                                            <a href="{{ route('account.download-invoice',$invoice->id) }}" class="btn btn-sm btn-default">@lang('saas.download')</a>


                                        @endif


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>

        </div>

    @endif

@endsection
