<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    function save(Request $req)
    {
        $employee = new Employee;
        $employee->name=$req->name;
        $employee->email=$req->email;
        $employee->phone=$req->phone;
        $employee->address=$req->address;
        $employee->save();
        return back()->with("success","Record Inserted....");
        return redirect('show');
    }
    public function show(Employee $employee)
    {
        $employee=Employee::all();
        return view('show',['employee'=>$employee]);
    }
}
