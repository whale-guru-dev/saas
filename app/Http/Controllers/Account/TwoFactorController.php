<?php

namespace App\Http\Controllers\Account;

use App\Models\Country;
use App\TwoFactor\TwoFactor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TwoFactor\TwoFactorStoreRequest;
use App\Http\Requests\TwoFactor\TwoFactorVerifyRequest;

class TwoFactorController extends Controller
{


    public function index()
    {
        if(!config('saas.enable_two_factor')){
            return redirect()->to('/account');
        }

        $countries = Country::all();

        return view('account.twofactor.index', compact('countries'));
    }

    public function store(TwoFactorStoreRequest $request, TwoFactor $twoFactor)
    {
        if(!config('saas.enable_two_factor')){
            return redirect()->to('/account');
        }
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $user = $request->user();

        $user->twoFactor()->create([
            'phone' => $request->phone_number,
            'dial_code' => $request->dial_code,
        ]);

        if ($response = $twoFactor->register($user)) {
            $user->twoFactor()->update([
                'identifier' => $response->user->id,
            ]);
        }

        return back();
    }

    public function verify(TwoFactorVerifyRequest $request)
    {
        if(!config('saas.enable_two_factor')){
            return redirect()->to('/account');
        }
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $request->user()->twoFactor()->update([
            'verified' => true,
        ]);

        return back();
    }

    public function destroy(Request $request, TwoFactor $twoFactor)
    {
        if(!config('saas.enable_two_factor')){
            return redirect()->to('/account');
        }
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $user = $request->user();

        $user->twoFactor()->delete();


        return back();
    }
}
