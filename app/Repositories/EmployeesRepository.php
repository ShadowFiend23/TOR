<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Employees;
use App\Interfaces\EmployeesRepositoryInterface;

class EmployeesRepository implements EmployeesRepositoryInterface
{
    public function getAllEmployees($params)
    {
        $query = Employees::join('employee_roles','employees.roleCode','=','employee_roles.code');

        if(!empty($params) && isset($params['roleCode']) && !empty($params['roleCode'])){
            $query::where('roleCode',$params['roleCode']);
        }
        return $query->get();
    }

    public function getArchivedEmployees(){
        return Employees::onlyTrashed()->get();
    }

    public function getEmployeeById($employeeID)
    {
        return Employees::find($employeeID);
    }

    public function deleteEmployee($employeeID)
    {
        Employees::destroy($employeeID);
    }

    public function createEmployee($request)
    {
        $params = $request->except('password');

        if(isset($params['id'])){
            $id = $params['id'];
            unset($params['id']);
            return $this->updateEmployee($id,$params,$request);
        }

        if(Employees::create($params)){
            $p = [
                "userID"    => $request->input('employeeID'),
                "password"  => bcrypt($request->input('password')),
                "role"      => 1
            ];

            return $this->createUser($p);
        }
    }

    public function getUserByUserID($id){
        return User::where('userID',$id)->first();
    }

    public function createUser($params){
        return User::create($params);
    }

    public function updateEmployee($id, $params, $request)
    {

        $oldEmployeeData = $this->getEmployeeById($id);

        $user = $this->getUserByUserID($oldEmployeeData['employeeID']);

        if(Employees::whereId($id)->update($params)){
            $p = [
                "userID"    => $params['employeeID'],
                "password"  => bcrypt($request->input('password'))
            ];

            return $this->updateUser($user,$p);
        }
    }

    public function updateUser($user,$params){
        if($user){
            return User::whereId($user->id)->update($params);
        }

    }
}
