@extends('layouts.app')
@section('title',  @trans('saas.case_studies'))
@section('content')

    <section class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center mb-lg-lg pt-md-5">

                        <h2 class="display-2"><span>Case Studies</span></h2>
                        <p class="lead">
                            Explore the case studies below and learn how leading companies use BAP SAAS KIT to boost
                            their sales
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <div class="album py-5">
            <div class="container">

                <div class="row">


                    @foreach($caseStudies as $case)

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{Voyager::image($case->getThumbnail($case->main_image, 'cropped'))}}" />
                            <div class="card-body">
                                <div class="card-text">
                                    {!! $case->description !!}

                                    @if($case->goto)
                                        <a class="btn btn-outline-primary" href="{{ $case->goto }}" target="_blank" >@lang('saas.check_full_case')</a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>

    </section>



@endsection
