<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Account\PasswordUpdated;
use App\Http\Requests\Account\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }

    public function store(PasswordStoreRequest $request)
    {
        if(config('saas.demo')){
            flash(trans('saas.sorry_you_cant_do_this_in_demo'))->warning();
            return redirect()->back();
        }

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        Mail::to($request->user())->send(new PasswordUpdated());

        flash(trans('saas.password_updated'))->success();

        return redirect()->route('account.index');
    }
}
