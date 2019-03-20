@extends('layouts.app')
@section('title',  @trans('saas.faq'))
@section('content')

    <section class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center mb-lg-lg pt-md-5">

                        <h2 class="display-2"><span>Frequently Asked Questions</span></h2>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">

            @foreach($faqs as $category => $rows)

            <div class="row mt-2">
                <aside class="col-sm-12">
                    <h5 class="display-4"><span>{{ $category }}</span></h5>

                    <div class="list-group filter-wrap">

                        @foreach($rows as $row)
                            <article class="list-group-item">
                                <header class="filter-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_{{$loop->parent->index}}_{{$loop->index}}" aria-expanded="true"  class="">

                                        <h6 class="title"><i class="icon-action fa fa-chevron-down"></i> {{ $row->title }} </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse" id="collapse_{{$loop->parent->index}}_{{$loop->index}}" style="">
                                    {!!  $row->description !!}
                                </div> <!-- collapse -filter-content  .// -->
                            </article>
                        @endforeach

                    </div> <!-- card.// -->


                </aside> <!-- col.// -->


            </div> <!-- row.// -->

            @endforeach

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
