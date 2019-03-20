<?php

namespace App\Http\Controllers\Account\Subscription;

use App\Http\Controllers\Controller;
use App\Service\SaasApplicationService;
use Illuminate\Http\Request;

class SubscriptionCancelController extends Controller
{

    private $saasService;

    public function __construct(SaasApplicationService $saasService)
    {

        $this->saasService = $saasService;
    }

    public function index()
    {
        return view('account.subscription.cancel.index');
    }

    public function store(Request $request)
    {
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        try{

            $request->user()->subscription('main')->cancel();

        }catch (\Exception $exception){

            flash(trans($exception->getMessage()))->warning();

            return redirect()->route('account.index');
        }


        $user = \Auth::user();

        try {

            if(!config('saas.api_url')) {
                flash(trans('saas.your_subscription_has_been_cancelled'))->success();
                return back();
            }

            $result = $this->saasService->cancelAccount($user);

            if ($result->status) {
                flash(trans('saas.your_subscription_has_been_cancelled'))->success();
            } else {
                flash(trans('saas.error_something_went_wrong'))->error();
            }

        } catch (\Exception $exception) {

            flash(trans('saas.error_something_went_wrong'))->error();
        }


        return redirect()->route('account.index');
    }
}
