<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function respondWithError($message,$data = [])
    {
        return $this->respondWith(['status' => 'error','message' => $message,'data' => $data],400);
    }

    public function respondWith($values,$code = 200)
    {
        return response()->json([
            'status' => $values['status'],
            'message' => $values['message'],
            'data' => $values['data']
        ])->setStatusCode($code);

    }

    public function respondWithSuccess($message,$data = [])
    {
        return $this->respondWith(['status' => 'success','message' => $message,'data' => $data],200);
    }
}
