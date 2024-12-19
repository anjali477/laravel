<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;


class EmpController extends Controller
{
    function getData(Request $req)
    {
        $emp = new Emp;
        $emp->name=$req->name;
        $emp->email=$req->email;
        $emp->phone=$req->phone;
        $emp->address=$req->address;
        $emp->save();
        return back()->with("success","Record Inserted....");
        // return redirect('show');
    }
}
