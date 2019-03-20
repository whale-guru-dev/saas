<?php
/**
 * Created by PhpStorm.
 * User: laravel-bap.com
 * Date: 28.02.19
 * Time: 22:42
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CrmEmployee extends Model
{
    use Notifiable;

    protected $table = 'crm_employee';

    protected $fillable = [
        'email',
        'first_name',
        'is_active',
        'application_id',
        'password',
        'uid'
    ];

    protected $hidden = ['application_id','password','uid'];
}
