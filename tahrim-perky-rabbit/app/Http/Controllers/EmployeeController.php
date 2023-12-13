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

    public function show($id){
        $dept = Department::all();
        $emp = Employee::where('id',$id)->first();
        return view('edit',compact('dept','emp')); 
    }
    public function update(Request $req){

        $data = array('name'=>$req->name,'email'=>$req->email,'phone'=>$req->phone,'address'=>$req->address,'dept_id'=>$req->dept);
        Employee::where('id',$req->id)->update($data);
        return redirect('/home');
    }
    public function delete($id){
        $del = Employee::where('id',$id)->delete();
        return redirect('/home');
    }
}
