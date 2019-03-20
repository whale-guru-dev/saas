@extends('layouts.app')
@section('title', @trans('saas.features'))
@section('content')

    <section class="section features">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center mb-lg-lg pt-md-5">

                        <h2 class="display-2"><span>Features</span></h2>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-lg-12">
                    <div class="row row-grid ">

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


@endsection
