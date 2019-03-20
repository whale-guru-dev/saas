<header class="header-global">
    <nav id="navbar-main" class="navbar @if(Route::is('home')) fixed-top @endif navbar-main navbar-expand-lg navbar-white bg-white">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
                <img src="{{ Voyager::image(setting('site.logo')) }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ route('home') }}">
                                <img src="{{ Voyager::image(setting('site.logo')) }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a href="{{ route('info.features') }}" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">@lang('saas.header.links.features')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('info.pricing') }}" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">@lang('saas.header.links.pricing')</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">@lang('saas.header.links.explore')</span>
                        </a>
                        <div class="dropdown-menu">
                            <span class="dropdown-item dropdown-item-header">@lang('saas.header.links.resources')</span>
                            <a href="{{ route('info.case_studies') }}" class="dropdown-item">@lang('saas.header.links.case_studies')</a>
                            <a href="{{ route('info.faq') }}" class="dropdown-item">@lang('saas.header.links.faq')</a>

                            <span class="dropdown-item dropdown-item-header">@lang('saas.header.links.company')</span>
                            <a href="{{ route('info.about_us') }}" class="dropdown-item">@lang('saas.header.links.about_us')</a>
                            <a href="{{ route('info.testimonials') }}" class="dropdown-item">@lang('saas.header.links.testimonials')</a>
                            <a href="{{ route('info.careers') }}" class="dropdown-item">@lang('saas.header.links.careers')</a>
                            <a href="{{ route('info.contact') }}" class="dropdown-item">@lang('saas.header.links.contact')</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    @if(config('saas.social.facebook'))
                        <li class="nav-item">
                            <a title="@lang('saas.social.facebook')" class="nav-link nav-link-icon" href="{{ config('saas.social.facebook') }}" target="_blank" data-toggle="tooltip">
                                <i class="fa fa-facebook-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Facebook</span>
                            </a>
                        </li>
                    @endif
                    @if(config('saas.social.instagram'))
                        <li class="nav-item">
                            <a title="@lang('saas.social.instagram')" class="nav-link nav-link-icon" href="{{ config('saas.social.instagram') }}" target="_blank" data-toggle="tooltip">
                                <i class="fa fa-instagram"></i>
                                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                    @endif
                    @if(config('saas.social.twitter'))
                        <li class="nav-item">
                            <a title="@lang('saas.social.twitter')" class="nav-link nav-link-icon" href="{{ config('saas.social.twitter') }}" target="_blank" data-toggle="tooltip">
                                <i class="fa fa-twitter-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Twitter</span>
                            </a>
                        </li>
                    @endif
                    @if(config('saas.social.github'))
                        <li class="nav-item">
                            <a title="@lang('saas.social.twitter')" class="nav-link nav-link-icon" href="{{ config('saas.social.github') }}" target="_blank" data-toggle="tooltip">
                                <i class="fa fa-github"></i>
                                <span class="nav-link-inner--text d-lg-none">Github</span>
                            </a>
                        </li>
                    @endif

                    @guest

                        <li class="nav-item d-none d-lg-block ml-lg-4">


                            <a title="@lang('saas.header.links.login')" href="{{ route('login') }}" class="btn btn-link btn-sm">
                                <span class="nav-link-inner--text">@lang('saas.header.links.login')</span>
                            </a>
                            <a title="@lang('saas.header.links.sing_up')" href="{{ route('register') }}" class="btn btn-md btn-success">
                                <span class="nav-link-inner--text">@lang('saas.header.links.sing_up')</span>
                            </a>
                        </li>

                    @else


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <i class="ni ni-collection d-lg-none"></i>
                                <span class="nav-link-inner--text font-weight-bold">@lang('saas.header.links.account')</span>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="{{ route('account.index') }}">@lang('saas.header.links.account')</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    @lang('saas.header.links.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    @endguest

                                <li class="nav-item dropdown">

                                    <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                        <span class="nav-link-inner--text font-weight-bold"><img title="{{ Session::get('locale') }}" src="{{ asset('flags/png/'. Session::get('locale')) }}.png" /> </span>
                                    </a>
                                    <div class="dropdown-menu">

                                        @foreach(config('saas.languages') as $key =>  $lang)
                                            <a class="dropdown-item" href="{{ route('language.change',$key) }}">
                                                <img title="{{ $lang }}" src="{{ asset('flags/png/'. $key ) }}.png" />
                                                {{ $lang }}
                                            </a>
                                        @endforeach


                                    </div>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</header>