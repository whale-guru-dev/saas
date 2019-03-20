<?php
/**
 * Created by PhpStorm.
 * User: laravel-bap.com
 * Date: 11.09.18
 * Time: 22:21
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{

    public function handle($request, Closure $next)
    {

        if (!Session::has('locale')) {
            Session::put('locale', config('app.locale'));
        }

        app()->setLocale(Session::get('locale'));

        return $next($request);

    }
}