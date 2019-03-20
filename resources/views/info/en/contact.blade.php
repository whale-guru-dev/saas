@extends('layouts.app')
@section('title',  @trans('saas.contact'))
@section('content')

    <section class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12 text-center mb-lg-lg">

                        <h2 class="display-2"><span>Contact</span></h2>
                        <p class="lead">
                            We’re ready to listen to your needs & would like to talk about how we can grow your business
                            online.
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="feature-description">

                        <div class="d-flex px-3">
                            <div>
                                <h3 class="text-success">Contact Us</h3>
                                <p>We are glad to help you! Feel free to submit your
                                    inquiries (general questions, product features, pricing,
                                    quote requests,etc.) via the web form, below.
                                    For technical support, please visit the Support
                                    section of our website.</p>
                            </div>
                        </div>

                        <div class="d-flex px-3">
                            <div>
                                <h3 class="text-success">Main Contacts</h3>

                                <b>BAP SAAS KIT</b> US Headquarters <br/>
                                901 Y. XYZ St, Suite 245 <br/>
                                Alexandria VA 22314 USA <br/>
                                Voicemail: +1-123-456-7891 <br/>
                                Email: hello@laravel-bap.com <br/>
                                Website: www.laravel-bap.com <br/>

                                <p></p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.feature-sections -->
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12 mt30">
                    <form method="post" action="{{ route('info.contact.store') }}">
                        @csrf
                        <!-- service-form -->
                        <div class="service-form">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10 ">
                                    <h3 class="text-success">Get in touch with us!</h3>
                                </div>

                                <div class="form-group col-lg-12">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user-circle-o"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.name')" id="name" type="name"
                                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}" required>

                                    </div>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-lg-12">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.email')" id="name" type="email"
                                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required>

                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-lg-12">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="@lang('saas.phone')" id="phone" type="text"
                                               class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                               name="phone" value="{{ old('phone') }}" >

                                    </div>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-lg-12">

                                <textarea id="message"
                                          class="form-control form-control-alternative {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                          name="message" value="{{ old('message') }}"
                                          required></textarea>

                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback text-center">
                                                <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-lg-12">
                                    <input type="submit" class="btn btn-default mb10"
                                           value="@lang('saas.send')"/>
                                    <p>
                                        <small>We promise we will never SPAM you with unwanted emails.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.service-form -->
                </div>

            </div>
        </div>

    </section>




@endsection
