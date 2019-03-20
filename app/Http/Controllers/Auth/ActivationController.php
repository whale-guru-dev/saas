<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\ConfirmationToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    protected $redirectTo = '/account';

    public function __construct()
    {
        $this->middleware(['confirmation_token.expired:/']);
    }

    public function activate(ConfirmationToken $token, Request $request)
    {
        $token->user->update([
           'activated' => true,
        ]);

        $token->delete();

        Auth::loginUsingId($token->user->id);

        flash(trans('saas.you_are_now_signed_in'))->success();

        return redirect()->intended($this->redirectPath());
    }

    protected function redirectPath()
    {
        return $this->redirectTo;
    }
}
