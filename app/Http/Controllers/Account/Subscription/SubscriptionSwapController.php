<?php

namespace App\Http\Controllers\Account\Subscription;

use App\Models\Plan;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subscription\SubscriptionSwapStoreRequest;
use App\Service\SaasApplicationService;
use Illuminate\Support\Facades\Auth;

class SubscriptionSwapController extends Controller
{

    private $saasService;

    public function __construct(SaasApplicationService $saasService)
    {
        $this->saasService = $saasService;
    }


    public function index()
    {

        $user = Auth::user();

        if(empty($user->card_brand)){

            flash(trans('saas.please_update_your_credit_card'))->warning();

            return redirect()->to('/account/subscription/card');
        }

        $plans = Plan::except(auth()->user()->plan->id)->active()->get();

        return view('account.subscription.swap.index', compact('plans'));
    }

    public function store(SubscriptionSwapStoreRequest $request)
    {
        $user = $request->user();

        $plan = Plan::where('gateway_id', $request->plan)->first();



        try{
            $user->subscription('main')->swap($plan->gateway_id);

        }catch (\Exception $exception){

            flash($exception->getMessage())->error();

            return back();
        }

        try {

            if(!config('saas.api_url')) {
                flash(trans('saas.your_subscription_was_changed'))->success();
                return back();
            }

            $result = $this->saasService->updateAccount($plan,$user);

            if ($result->status) {
                flash(trans('saas.your_subscription_was_changed'))->success();
            } else {
                flash(trans('saas.error_something_went_wrong'))->error();
            }

        } catch (\Exception $exception) {

            flash(trans('saas.error_something_went_wrong'))->error();
        }



        return back();
    }

}
