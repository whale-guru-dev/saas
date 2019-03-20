<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Service\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    private $employeeService;

    public function __construct(EmployeeService $service)
    {
        $this->employeeService = $service;
    }

    /**
     * Index View
     *
     * @return $this
     */
    public function index()
    {

        $user = Auth::user();

        return view('account.users.index');
    }


    /**
     * Get single user
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function axiosGetUser($id)
    {

        $user = Auth::user();

        $employee = $this->employeeService->getUser($id);

        if (!empty($employee) && $employee->application_id == $user->application_id) { // validate if same company
            return response()->json($employee);
        } else {
            $this->respondWithError("Invalid User");
        }

    }

    /**
     * @param Request $request
     * @return $this
     */
    public function axiosDeleteUser(Request $request)
    {
        $id = $request->get('id');

        $crmEmployee = $this->employeeService->getUser($id);
        if (!empty($crmEmployee)) {

            $result = $this->employeeService->deleteUser($crmEmployee);
            if ($result['status'] == 'success') {
                return $this->respondWithSuccess($result['message'],$result['data']);
            } else {
                return $this->respondWithError($result['message'],$result['data']);
            }
        }

        return $this->respondWithError(trans('saas.invalid_user'));
    }

    /**
     * Get Users List
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function axiosListUsers()
    {
        $user = Auth::user();

        $list = $this->employeeService->getEmployees();

        return response()->json($list);

    }

    /**
     * @param Request $request
     * @return $this
     */
    public function axiosSaveUser(Request $request)
    {

        $data = $request->only('id', 'first_name', 'email', 'password', 'is_active');

        $result = $this->employeeService->save($data);

        if ($result['status'] == 'success') {
            return $this->respondWithSuccess($result['message'],$result['data']);
        } else {
            return $this->respondWithError($result['message'],$result['data']);
        }
    }


}
