<?php

namespace App\Http\Controllers\Api;
use App\models\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //Create Student
    public function CreateEmployee(Request $request) {
}
//List Students
    public function listEmployees(Employee $employees) {
        $employees=Employee::all();
        return $employees;
}
// Single student API
    public function getSingleEmployee(Employee $employees,$id) {
        $employees=Employee::find($id);
        return $employees;
}
// Update Student
    public function updateEmployee(Request $reques , $id) {
}
// Delte Student
    public function deleteEmployee($id) {
        $employees=Employee::find($id);
        $employees->delete();
        $employees=Employee::all();
        return $employees;
    }
}
