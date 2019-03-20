<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscription\SubscriptionStoreRequest;
use App\Models\Plan;
use App\Service\EmployeeService;
use App\Service\PlansService;
use App\Service\SaasApplicationService;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    private $planSservice;

    private $saasService;

    private $employeeService;

    public function __construct(PlansService $plansService, SaasApplicationService $saasService, EmployeeService $empService)
    {
        $this->planSservice = $plansService;
        $this->saasService = $saasService;
        $this->employeeService = $empService;
    }

    public function index()
    {
        $plans = Plan::active()->get();

        return view('subscription.index', compact('plans'));
    }


    /**
     * Store account in application
     *
     * @param SubscriptionStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SubscriptionStoreRequest $request)
    {
        $user = Auth::user();

        $company_name = $request->get('company_name');

        $user_password = $request->get('user_password');


        try {


            $result = $this->saasService->validateAccount($company_name, $user->email);

            if ($result->status == 'error') {
                flash($result->message)->error();
                return back();
            }

        } catch (\Exception $exception) {
            flash(trans('saas.error_something_went_wrong'))->error();
        }


        $plan = $this->planSservice->getByGateway($request->get('plan'));

        $subscription = $request->user()->newSubscription('main', $request->plan);

        if ($plan->trial) {
            $subscription->trialDays($plan->trial_days);

        }



        if ($request->has('coupon')) {
            $subscription->withCoupon($request->coupon);
        }

        try {
            if (config('saas.payment_gateway', '') == 'stripe') {
                $subscription->create($request->token);
            } else {
                $subscription->create($request->payment_method_nonce);
            }


        } catch (\Exception $exception) {

            flash(trans($exception->getMessage()))->warning();

            return redirect(route('account.index'));
        }

        try {

            if (!config('saas.api_url')) {
                flash(trans('saas.thanks_for_becoming_a_subscriber'))->success();
                return back();
            }

            $result = $this->saasService->createAccount($company_name, $user->name, $user->email, $user_password, $plan->teams_limit, $plan->storage_limit, $plan->api_plan);

            if ($result->status) {

                $user->application_id = $result->data->company->id;

                if ($user->save()) {


                    flash(trans('saas.thanks_for_becoming_a_subscriber'))->success();
                } else {
                    flash(trans('saas.error_something_went_wrong'))->error();
                }
            } else {
                flash(trans('saas.error_something_went_wrong'), $result->message)->error();
            }

        } catch (\Exception $exception) {


            flash(trans('saas.error_something_went_wrong'), $exception->getMessage())->error();
        }

        return redirect(route('account.index'));
    }
}
