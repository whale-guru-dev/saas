<?php
/**
 * Created by PhpStorm.
 * User: laravel-bap.com
 * Date: 28.02.19
 * Time: 22:43
 */

namespace App\Service;


use App\Mail\Auth\InviteEmail;
use App\Models\CrmEmployee;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmployeeService
{

    private $saasService;

    public function __construct(SaasApplicationService $service)
    {
        $this->saasService = $service;
    }

    public function countUserForApplication($application_id){

        return CrmEmployee::where('application_id',$application_id)->count();

    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUser($id)
    {

        $employee = CrmEmployee::where('id', $id)->first();

        return $employee;
    }

    /**
     * Delete user
     *
     * @param CrmEmployee $employee
     * @return array
     */
    public function deleteUser(CrmEmployee $employee)
    {
        $user = Auth::user();
        if ($employee->application_id != $user->application_id) {
            return [
                'status' => 'error',
                'message' => trans('saas.hey_hacker')
            ];
        }

        try {

            $result = $this->saasService->deleteUser($employee->uid);

            if ($result->status == 'success') {
                $employee->delete();

                return [
                    'status' => 'success',
                    'message' => trans('saas.user_deleted'),
                    'data' => [
                        'api_message' => $result->data->message,
                        'api_code' => $result->data->code
                    ]
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => trans('saas.cant_perform_action_api_exception'),
                    'data' => [
                        'api_message' => $result->data->message,
                        'api_code' => $result->data->code
                    ]
                ];
            }

        } catch (\Exception $exception) {

            return [
                'status' => 'error',
                'message' => trans('saas.cant_perform_action_api_exception'),
                'data' => [
                    'exception' => $exception->getMessage()
                ]
            ];
        }


    }

    /**
     * Return employees
     *
     * @return mixed
     */
    public function getEmployees()
    {

        $user = Auth::user();

        $list = CrmEmployee::where('application_id', $user->application_id)->orderBy('id', 'desc')->get();

        return $list;
    }

    /**
     * Save or update employees
     *
     * @param $data
     * @return array
     */
    public function save($data)
    {


        $user = Auth::user();

        if ($data['id'] > 0) {
            $crmEmployee = $this->getUser($data['id']);

            if ($crmEmployee->application_id != $user->application_id) {
                return [
                    'status' => 'error',
                    'message' => trans('saas.hey_hacker')
                ];
            }

            try {

                $data['id'] = $crmEmployee->uid;

                $result = $this->saasService->saveOrUpdateUser($data);

                if ($result->status == 'success') {

                    $crmEmployee->first_name = $data['first_name'];
                    $crmEmployee->email = $data['email'];
                    $crmEmployee->is_active = $data['is_active'];
                    $crmEmployee->uid = $result->data->uid;
                    $crmEmployee->password = '';

                    $crmEmployee->save();

                    return [
                        'status' => 'success',
                        'message' => trans('saas.crm_employee_updated'),
                        'data' => [
                            'api_message' => $result->data->message,
                            'api_code' => $result->data->code
                        ]
                    ];
                }else{
                    return [
                        'status' => 'error',
                        'message' => trans('saas.cant_perform_action_api_exception'),
                        'data' => [
                            'api_message' => $result->data->message,
                            'api_code' => $result->data->code
                        ]
                    ];
                }

            } catch (\Exception $exception) {

                return [
                    'status' => 'error',
                    'message' => trans('saas.cant_perform_action_api_exception'),
                    'data' => [
                        'api_message' => $exception->getMessage()
                    ]
                ];
            }

        } else {

            $rules = array('email' => 'unique:crm_employee,email');
            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
                return [
                    'status' => 'danger',
                    'message' => trans('saas.email_taken'),
                    'data' => [

                    ]
                ];
            }


            //Validate if limit not exceeded

            $teamLimit = Auth::user()->plan->teams_limit;
            $usersCount = $this->countUserForApplication($user->application_id);

            if($teamLimit != null && ($usersCount >= $teamLimit)){
                return [
                    'status' => 'danger',
                    'message' => trans('saas.you_cant_have_more_users'),
                    'data' => [

                    ]
                ];
            }

            try {

                $result = $this->saasService->saveOrUpdateUser($data);

                if ($result->status == 'success') {

                    // new user
                    $crmEmployee = new CrmEmployee();
                    $crmEmployee->first_name = $data['first_name'];
                    $crmEmployee->email = $data['email'];
                    $crmEmployee->is_active = 1;
                    $crmEmployee->application_id = $user->application_id;
                    $crmEmployee->uid = $result->data->uid;
                    $crmEmployee->password = '';
                    $crmEmployee->save();

                    Mail::to($crmEmployee)->send(new InviteEmail($crmEmployee,$user,$data['password']));

                    return [
                        'status' => 'success',
                        'message' => trans('saas.crm_employee_created'),
                        'data' => [
                            'api_message' => $result->data->message,
                            'api_code' => $result->data->code
                        ]

                    ];

                } else {

                    return [
                        'status' => 'error',
                        'message' => trans('saas.this_email_is_already_taken'),
                        'data' => [
                            'api_message' => $result->data->message,
                            'api_code' => $result->data->code
                        ]
                    ];
                }

            } catch (ServerException $exception) {

                return [
                    'status' => 'error',
                    'message' => trans('saas.cant_perform_action_api_exception'),
                    'data' => [
                        'api_message' => $exception->getMessage()
                    ]
                ];
            }


        }

    }

}