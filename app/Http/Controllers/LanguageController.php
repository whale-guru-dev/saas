<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{

    public function change($language,Request $request)
    {

        Session::put('locale',$language);



        return redirect()->back();

    }

}