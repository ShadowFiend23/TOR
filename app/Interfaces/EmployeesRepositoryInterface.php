<?php

namespace App\Interfaces;

interface EmployeesRepositoryInterface
{
    public function getAllEmployees($params);
    public function getEmployeeById($employeeID);
    public function deleteEmployee($employeeID);
    public function createEmployee($params);
    public function updateEmployee($employeeID, $params, $password);
}
