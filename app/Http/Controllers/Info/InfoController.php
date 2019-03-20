<?php

namespace App\Http\Controllers\Info;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactStoreRequest;
use App\Mail\Contact\ContactEmail;
use App\Service\InfoService;
use App\Service\PlansService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{

    private $planService;

    private $locale;

    private $infoService;


    private function setup()
    {
        $this->locale = Session::get('locale');
    }

    public function __construct(PlansService $plansService, InfoService $infoService)
    {
        $this->planService = $plansService;
        $this->infoService = $infoService;
    }


    public function home()
    {
        $this->setup();
        return view("info.$this->locale.home")
            ->with('features',$this->infoService->getFeatures($this->locale));
    }

    public function terms()
    {
        $this->setup();

        return view("info.$this->locale.terms");
    }

    public function features()
    {
        $this->setup();

        return view("info.$this->locale.features")
            ->with('features',$this->infoService->getFeatures($this->locale));
    }

    public function pricing()
    {
        $this->setup();

        return view("info.$this->locale.pricing")->with('plans', $this->planService->activePlans());
    }

    public function policy()
    {
        $this->setup();

        return view("info.$this->locale.policy");
    }

    public function caseStudies()
    {
        $this->setup();

        return view("info.$this->locale.case_studies")
            ->with('caseStudies',$this->infoService->getCaseStudies($this->locale));
    }

    public function helpCenter()
    {
        $this->setup();

        return view("info.$this->locale.help_center");
    }

    public function faq()
    {
        $this->setup();

        return view("info.$this->locale.faq")
            ->with('faqs',$this->infoService->getGroupedFaq($this->locale));
    }

    public function aboutUs()
    {
        $this->setup();

        return view("info.$this->locale.about_us")
            ->with('employees',$this->infoService->getEmployees($this->locale));
    }

    public function testimonials()
    {
        $this->setup();

        return view("info.$this->locale.testimonials")
            ->with('testimonials',$this->infoService->getTestimonials($this->locale));
    }

    public function careers()
    {
        $this->setup();


        return view("info.$this->locale.careers")
            ->with('jobs',$this->infoService->getJobs($this->locale));
    }

    public function contact()
    {
        $this->setup();

        return view("info.$this->locale.contact");
    }

    public function store(ContactStoreRequest $request)
    {
        $this->setup();

        $form = $request->only(['name', 'email', 'phone', 'message']);

        Mail::to(config('app.contact_form_recipient'))->send(new ContactEmail($form));

        flash(trans('saas.email_sent'))->success();

        return redirect()->route('info.contact');
    }

}
