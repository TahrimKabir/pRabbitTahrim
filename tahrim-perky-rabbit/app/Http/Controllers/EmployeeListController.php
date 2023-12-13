<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class EmployeeListController extends Controller
{
    // 
    public function index(){
        $dept = Department::all();
        return view('home',compact('dept'));
    }
}
