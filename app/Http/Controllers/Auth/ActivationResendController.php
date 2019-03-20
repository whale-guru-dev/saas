<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserRequestedActivationEmail;
use App\Http\Requests\Auth\ActivateResendRequest;

class ActivationResendController extends Controller
{
    public function index()
    {
        return view('auth.activation.resend.index');
    }

    public function store(ActivateResendRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (optional($user)->hasNotActivated()) {
            event(new UserRequestedActivationEmail($user));
        }

        flash(trans('saas.an_activation_email_has_been_sent'))->success();


        return redirect()->route('login');
    }
}
