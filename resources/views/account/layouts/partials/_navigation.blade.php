<div class="nav flex-column nav-pills account-menu" role="tablist" aria-orientation="vertical">
    @notsubscribed

    <a class="nav-link {{ return_if(on_page('plans.index'), 'active') }}" href="{{ route("plans.index") }}">@lang('saas.menu.plans')</a>

    @endnotsubscribed
    <a class="nav-link {{ return_if(on_page('account'), 'active') }}" href="{{ route("account.index") }}">@lang('saas.menu.account_overview')</a>

    @subscribed
    <a class="nav-link {{ return_if(on_page('account/users'), 'active') }}" href="{{ route("account.users.index") }}">@lang('saas.menu.users')</a>
    @endsubscribed
    <a class="nav-link {{ return_if(on_page('account/profile'), 'active') }}" href="{{ route("account.profile.index") }}">@lang('saas.menu.profile')</a>
    <a class="nav-link {{ return_if(on_page('account/password'), 'active') }}" href="{{ route("account.password.index") }}">@lang('saas.menu.change_password')</a>

    @if(config('saas.enable_two_factor'))
        <a class="nav-link {{ return_if(on_page('account/twofactor'), 'active') }}" href="{{ route("account.twofactor.index") }}">@lang('saas.menu.two_factor_auth')</a>
    @endif
</div>

@subscribed

        <div class="nav flex-column nav-pills account-menu" role="tablist" aria-orientation="vertical">
            @subscriptionnotcancelled
                <a class="nav-link {{ return_if(on_page('account/subscription/swap'), 'active') }}" href="{{ route('account.subscription.swap.index') }}">@lang('saas.menu.change_plan')</a>
                <a class="nav-link {{ return_if(on_page('account/subscription/cancel'), 'active') }}" href="{{ route('account.subscription.cancel.index') }}">@lang('saas.menu.cancel_subscription')</a>
            @endsubscriptionnotcancelled
            @subscriptioncancelled
                <a class="nav-link {{ return_if(on_page('account/subscription/resume'), 'active') }}" href="{{ route('account.subscription.resume.index') }}">@lang('saas.menu.resume_subscription')</a>
            @endsubscriptioncancelled

            @if(config('saas.payment_gateway','') == 'stripe')
                <a class="nav-link {{ return_if(on_page('account/subscription/card'), 'active') }}" href="{{ route('account.subscription.card.index') }}">@lang('saas.menu.update_card')</a>
            @endif
        </div>

@endsubscribed
