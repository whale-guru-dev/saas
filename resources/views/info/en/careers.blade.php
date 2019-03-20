@extends('layouts.app')
@section('title', @trans('saas.careers'))
@section('content')

    <section class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center mb-lg-lg pt-md-5">

                        <h2 class="display-2"><span>Careers</span></h2>
                        <p class="lead">
                            Come and build the future of MultCRM with us
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="display-2"><span>Benefits</span></h2>
                </div>

                <div class="col-lg-6">
                    <ul>
                        <li>100% coverage of health and dental insurance</li>
                        <li>Meaningful equity as an early employee</li>
                        <li>Dependent Care FSA</li>
                        <li>Mac laptop, book stipend and professional development funds</li>
                    </ul>
                </div>
                <div class="col-lg6">
                    <ul>
                        <li>Health and wellness initiatives</li>
                        <li>Remote working friendly</li>
                        <li>Monthly catered lunches and office snacks</li>

                    </ul>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-12">
                    <h2 class="display-2"><span>Open Positions</span></h2>
                </div>

                @foreach($jobs as $job)
                    <aside class="col-sm-12">

                        <div class="list-group filter-wrap mb-lg-4">

                            <article class="list-group-item">
                                <header class="filter-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_{{$loop->index}}" aria-expanded="true"
                                       class="">

                                        <h6 class="title"><i class="icon-action fa fa-chevron-down"></i> {{ $job->title }} </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse" id="collapse_{{$loop->index}}" style="">
                                    {!! $job->description !!}

                                    @if($job->goto)
                                        
                                            <a style="margin-top: 20px; margin-bottom: 20px;" target="_blank" href="{{ $job->goto }}" class="btn btn-success">@lang('saas.open_job')</a>
                                    @endif


                                </div> <!-- collapse -filter-content  .// -->
                            </article>

                        </div> <!-- card.// -->


                    </aside> <!-- col.// -->

                @endforeach
            </div> <!-- row.// -->

        </div>
        <!--container end.//-->

        <br><br>
        <article class="bg-secondary mb-3">
            <div class="card-body text-center">

                <h3 class=" mt-3">Didn't found what You looking for ?</h3>
                <p class="h5">Contact us anyway</p>
                <br>
                <p><a class="btn btn-warning text-white" href="{{ route('info.contact') }}">
                        Contact US
                        <i class="fa fa-envelope-o "></i></a></p>
            </div>
            <br><br>
        </article>

    </section>



@endsection
