<?php

namespace App\Service;

use App\Models\Plan;

class PlansService
{

    /**
     * Get Plan by Stripe Gateway
     * @param $plan
     * @return mixed
     */
    public function getByGateway($plan){

        return Plan::where('gateway_id','=',$plan)->first();

    }

    /**
     * Get all active plans
     *
     * @return mixed
     */
    public function activePlans(){

        return Plan::where('active',1)->orderBy('orderby','asc')->get();

    }

}