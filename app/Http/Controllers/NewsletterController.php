<?php

namespace App\Http\Controllers;

use App\Service\NewsletterService;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    private $newsletterService;

    public function __construct(NewsletterService $newsletterService)
    {
        $this->newsletterService = $newsletterService;
    }

    public function register(Request $request)
    {

        $email = $request->get('email', null);

        $result = $this->newsletterService->register($email);

        return $this->respondWith($result);
    }

}