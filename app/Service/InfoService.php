<?php
/**
 * Created by PhpStorm.
 * User: laravel-bap.com
 * Date: 16.09.18
 * Time: 10:56
 */

namespace App\Service;


use App\Models\CaseStudy;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Job;
use App\Models\Testimontial;

class InfoService
{

    /**
     * Get features
     *
     * @param $language
     * @return mixed
     */
    public function getFeatures($language)
    {
        return Feature::where('language', $language)->orderBy('orderby', 'asc')->get();
    }


    /**
     * Get Case Studies
     *
     * @param $language
     * @return mixed
     */
    public function getCaseStudies($language)
    {
        return CaseStudy::where('language', $language)->orderBy('orderby', 'asc')->get();
    }


    /**
     * Get Employees
     *
     * @param $language
     * @return mixed
     */
    public function getEmployees($language)
    {
        return Employee::where('language', $language)->orderBy('orderby', 'asc')->get();
    }

    /**
     * Get Testimontials
     *
     * @param $language
     * @return mixed
     */
    public function getTestimonials($language)
    {
        return Testimontial::where('language', $language)->orderBy('orderby', 'asc')->get();
    }

    /**
     * Get Jobs
     *
     * @param $language
     * @return mixed
     */
    public function getJobs($language)
    {
        return Job::where('language', $language)->orderBy('orderby', 'asc')->get();
    }

    /**
     * Get grouped faq by category
     *
     * @param $language
     * @return mixed
     */
    public function getGroupedFaq($language)
    {
         $faqWithCategories = Faq::where('language', $language)->with('category')->get()->groupBy('category.title');

        return $faqWithCategories;
    }
}