<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $dept = Department::all();
        return view('create-employee',compact('dept'));
    }

    public function create(Request $req){
        $data = array('name'=>$req->name,'email'=>$req->email,'phone'=>$req->phone,'address'=>$req->address,'dept_id'=>$req->dept);
        Employee::create($data);
        return redirect()->back();
    }
}
