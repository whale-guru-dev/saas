<?php

namespace App\Http\Controllers\Subscription;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use App\Service\PlansService;

class PlanController extends Controller
{

    private $planService;

    public function __construct(PlansService $plansService)
    {
        $this->planService = $plansService;
    }

    public function index()
    {
        $plans = $this->planService->activePlans();

        return view('subscription.plans.index', compact('plans'));
    }
}
