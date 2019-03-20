@extends('layouts.app')
@section('title', @trans('saas.about'))
@section('content')

    <section class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center">

                        <h2 class="display-2"><span>BAP SAAS KIT</span></h2>
                        <p class="lead">
                            <b>MultiCRM is a collaboration platform launched in 2018.</b> <br/>
                            MultiCRM provides a complete communication and management tools for your team, including
                            CRM, files, calendars, and more. MultiCRM is available in cloud and on premise.
                        </p>

                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
                        <h3 class="display-2"><span>Management board</span></h3>
                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">

                @foreach($employees as $employee)
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="{{Voyager::image($employee->getThumbnail($employee->image, 'medium'))}}"
                                 class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                                 style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">{{ $employee->full_name }}</span>
                                    <small class="h6 text-muted">{{ $employee->role }}</small>
                                </h5>
                                <div class="mt-3">
                                    @if($employee->twitter_url)
                                        <a target="_blank" href="{{ $employee->twitter_url }}"
                                           class="btn btn-warning btn-icon-only rounded-circle">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if($employee->facebook)
                                        <a href="{{ $employee->facebook }}"
                                           class="btn btn-warning btn-icon-only rounded-circle">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </section>

@endsection
