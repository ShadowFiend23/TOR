<?php

namespace App\Repositories;

use App\Interfaces\EmployeesRepositoryInterface;
use App\Models\Employees;

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

    public function createEmployee($params)
    {
        if(isset($params['id'])){
            $id = $params['id'];
            unset($params['id']);
            return $this->updateEmployee($id,$params);
        }

        return Employees::create($params);
    }

    public function updateEmployee($employeeID, $params)
    {
        return Employees::whereId($employeeID)->update($params);
    }
}
