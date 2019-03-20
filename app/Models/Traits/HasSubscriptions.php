<?php

namespace App\Models\Traits;

trait HasSubscriptions
{

    public function hasSubscription()
    {
        return $this->subscribed('main');
    }

    public function doesNotHaveSubscription()
    {
        return !$this->hasSubscription();
    }

    public function hasCancelled()
    {
        return optional($this->subscription('main'))->cancelled();
    }

    public function hasNotCancelled()
    {
        return !$this->hasCancelled();
    }

    public function isCustomer()
    {

        if (config('saas.payment_gateway', '') == 'stripe') {
            return $this->hasStripeId();
        }

        if (config('saas.payment_gateway', '') == 'braintree') {
            return $this->hasBraintreeId();
        }

        return false;
    }
}
