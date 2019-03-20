<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ProfileStoreRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('account.profile.index');
    }

    public function store(ProfileStoreRequest $request)
    {

        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $request->user()->update($request->only('name', 'email'));

        flash(trans('saas.account_details_updated'))->success();

        return back();
    }
}
