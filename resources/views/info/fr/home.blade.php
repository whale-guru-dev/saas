@extends('layouts.app')
@section('title', @trans('saas.home_title'))
@section('content')


    <section id="_saas_hero" class="section section-lg mt-100">
        <div class="shape shape-style-1 shape-light shape-skew">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container shape-container d-flex my-1">
            <div class="col px-0">
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <img src="{{ asset('saas/assets/img/theme/g1920.png') }}" class="img-fluid">
                    </div>

                    <div class="col-md-6 order-md-1">
                        <h3>Your Workspace</h3>
                        <h5>You're the captain now</h5>
                        <h1 class="display-3  text-default">Track, Analyze and Improve

                        </h1>
                        <p class="lead  text-default">
                            ^multicrm is a Powerful Multi-Company Modular CRM build on top of Laravel 5.6, Twitter Bootstrap and SCSS. CRM contains over 35 features & modules. Platform is easy to extend, customize, developer, can extend and modify application with short time.
                        </p>
                        <div class="btn-wrapper">

                            <a href="{{ route('register') }}" class="btn btn-danger btn-md btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--text">Register Now</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg section-bg">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('saas/assets/img/theme/g1188.png') }}" class="img-fluid floating">
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="pr-md-5">
                        <div class="icon icon-lg icon-shape bg-gold text-white shadow rounded-circle mb-5">
                            <i class="fa fa-lightbulb-o text-white"></i>
                        </div>
                        <h3>Stop wasting time, Start Earning</h3>
                        <p>BAP SAAS KIT comes with all feature that are required to run Saas application. And if something is missing then we will build it.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle bg-gold text-white mr-3">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Easy to set up</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle bg-gold text-white mr-3">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Our users loves us</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle bg-gold text-white mr-3">
                                            <i class="ni ni-satisfied"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Works with Stripe</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center" style="margin-bottom: 50px">
                    <h2 class="text-success display-4">See why over 75,000 users use BAP SAAS KIT</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-12">
                    <div class="row row-grid features">

                        @foreach($features as $feature)

                            <div class="col-lg-4 mb-md">
                                <div class="card card-lift--hover shadow border-0 ">
                                    <div class="card-body py-5">
                                        <div class="text-center">
                                            <i class="{{ $feature->icon }}"></i>
                                            <h5 class="text-primary text-uppercase font-weight-bold">{{ $feature->heading }}</h5>
                                        </div>

                                        <div class="description mt-4 min-height-70 ">
                                            {!! $feature->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section bg-secondary">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-6">
                    <div class="card bg-default shadow border-0">
                        <img src="{{ asset('saas/assets/img/theme/g98.png') }}" class="card-img-top">
                        <blockquote class="card-blockquote">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                                <polygon points="0,52 583,95 0,95" class="fill-default"></polygon>
                                <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon>
                            </svg>
                            <h4 class="display-3 font-weight-bold text-white">BAP SAAS KIT</h4>
                            <p class="lead text-italic text-white">
                                Is as Laravel SAAS addon to ^multi crm. <br />
                                Start Your own Saas Business.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-5">
                        <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                            <i class="ni ni-settings"></i>
                        </div>
                        <h3>Customers reviews</h3>
                        <p>It has made our sales department more effective and efficient. It's easy to use and it's constantly updated.</p>
                        <span href="#" class="font-weight-bold text-warning mt-5 text-right">Mike ~NY Goods</span>
                        <p><br /></p>
                        <p>BAP SAAS CRM is a powerful tool for our sales team - all of our important sales info is now streamlined and easy to act on.</p>
                        <span href="#" class="font-weight-bold text-warning mt-5 text-right">John ~ BFG Data</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="_saas_newsletter" class="section  section-bg">

        <div class=" container-bg container">
            <div class="col-lg-12 text-center">

                <div class="col-md-6 margin-zero-auto">

                        <h3>Get our monthly newsletter</h3>
                        <p>Join a community of over 40,000 newsletter subscribers</p>

                        <form method="POST" id="newsletter-form" action="{{ route('newsletter.register') }}">

                            @csrf

                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">@lang('saas.register_email')</button>
                            </div>
                        </form>

                </div>
                <div class="col-md-12">
                    <p style="font-size: 11px">
                        Your information will help us deliver, develop and promote BAP SAAS KIT products.
                        While we may use your information to help target BAP digital advertising, we will never sell your information to any third parties.
                        Submitting this form indicates you agree to our Privacy Policy. You can withdraw your consent at any time.
                    </p>
                </div>
            </div>
        </div>

    </section>


    <section id="_saas_give_us_a_call" class="section ">

        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="col-lg-7 card shadow shadow-lg--hover mt-5 margin-zero-auto">
                    <div class="card-body">
                        <h4><b>Questions? Give us a call!</b></h4>
                        <h3>1-541-754-3010 </h3>
                        <p>Pssyt! This is fake! Don't Call</p>
                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection
