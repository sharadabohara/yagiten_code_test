<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   
    public function index()
    {
        
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->uuid=$request->uuid;
        $employee->name=$request->name;
        $employee->designation=$request->designation;
        $employee->contact=$request->contact;
        // $employee->employee_type=$request->employee_type;
        $employee->address=$request->address;
        if($employee->employee_type == "p"){
        uuid == p;
        }
        $employee->save();
        return redirect()->route('view-student');
    }

    
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee $employee)
    {
        //
    }

    
    public function update(Request $request, Employee $employee)
    {
        //
    }

    
    public function destroy(Employee $employee)
    {
        //
    }
}
