<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('students.index', compact('students'));

    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required|date',
            'contact_number' => 'required|date',
        ]);

        student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully.');
    }

}
