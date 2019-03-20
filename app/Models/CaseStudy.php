<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class CaseStudy extends Model
{

    use  Resizable;

    protected $table = 'case_studies';

}
