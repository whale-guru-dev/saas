@extends('layouts.app')
@section('title',  @trans('saas.testimonials'))
@section('content')

    <section class="section ">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-2"><span>Testimonials</span></h1>
                    <p class="lead">
                        See what out users are saying
                    </p>
                </div>

            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="album py-5">
                <div class="container">
                    <div class="row">

                        @foreach($testimonials as $testimonial)

                        <div class="col-md-4">
                            <div class="card mb-4 shadow shadow-lg--hover">
                                <div class="card-body">

                                    <div class="card-text">
                                        {!! $testimonial->description !!}
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <small class="text-danger font-weight-bold">{{ $testimonial->author }}</small>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
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
