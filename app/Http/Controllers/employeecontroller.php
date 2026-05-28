<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    // {   $employees = employee::all();
    //     return view('employee.index', compact('employees'));    
        
    }


    public function create()
    // {
    //     return view('employee.create');
    // }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'fname' => 'required',
    //         'mname' => 'required',
    //         'lname' => 'required',
    //         'address' => 'required',
    //         'date_of_birth' => 'required|date',
    //         'contact_number' => 'required|string|max:20',
    //     ]);

    //     employee::create($request->all());

    //     return redirect()->route('employee.index')->with('status', 'Employee created successfully!');
    // }

    public function edit( int $id)
    {
        $employee = employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required|date',
            'contact_number' => 'required|string|max:20',
        ]);

        $employee = employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('status', 'Employee updated successfully!');
    }

    public function destroy(int $id){
      $employee = employee::findOrFail($id);
      $employee->delete();
      return redirect()->route('employee.index')->with('status', 'Employee deleted successfully!');
    }
}
