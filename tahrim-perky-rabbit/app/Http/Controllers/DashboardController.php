<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Department;
class DashboardController extends Controller
{
    // 
    public function index(){
     $dept = Department::all();
     return view('dashboard');
    }
}
