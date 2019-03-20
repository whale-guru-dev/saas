@extends('layouts.app')
@section('title',  @trans('saas.pricing'))
@section('content')

    <section class="section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="col-lg-12 text-center">

                    <h2 class="display-2"><span>Pricing</span></h2>

                     <h4 class="display-4">MultiCRM in cloud or self-hosted. You choose.</h4>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-100">
        <div class="card-deck mb-3">

            @foreach($plans as $plan)
                <div class="card mb-4 @if($plan->featured ) shadow-lg featured @else shadow @endif ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center">{{ $plan->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title pricing-card-title text-center">${{$plan->price}}
                            <small class="text-muted">/ @lang('saas.mo')</small>
                        </h5>
                        @if(!empty($plan->description))
                            {{ $plan->description }}
                        @else
                            <ul class="list-unstyled mt-3 mb-3">
                                {!! trans('saas.pricing_plans.plan_'.$plan->id) !!}
                            </ul>
                        @endif
                        <a href="{{ route('register') }}" class="btn btn-lg btn-block @if($plan->featured) btn-success @else btn-outline-primary @endif ">@lang('saas.signup_now')</a>
                    </div>
                </div>
            @endforeach


        </div>



    </div>
@endsection
