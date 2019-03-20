<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\DeactivateAccountRequest;

class DeactivateController extends Controller
{
    public function index()
    {
        return view('account.deactivate.index');
    }

    public function store(DeactivateAccountRequest $request)
    {
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $user = $request->user();

        if ($user->subscribed('main')) {
            try{
                $user->subscription('main')->cancel();

            }catch (\Exception $exception){

                flash(trans($exception->getMessage()))->warning();

                return redirect('/');
            }

        }

        $user->delete();

        flash(trans('saas.your_account_has_been_deactivated'))->warning();

        return redirect('/');
    }
}
