<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $employees = Employee::where('name', 'like', '%' . $request->get('search') . '%')
                ->orWhere('job_title', 'like', '%' . $request->get('search') . '%')
                ->paginate(10);
        } else {
            $employees = Employee::paginate(10);
        }

        return view('employees.index', ['employees' => $employees]);
    }

    public function show(Request $request, Employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:255',
            'job_title'  => 'required|max:255',
            'joining_date'  => 'required|date',
            'salary'  => 'required|numeric',
            'email' => 'email',
            'mobile_no' => 'required|numeric',
            'address' => 'required',
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index');

    }

    public function edit(Request $request, $id)
    {
        $employee = Employee::find($id);

        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:255',
            'job_title'  => 'required|max:255',
            'joining_date'  => 'required|date',
            'salary'  => 'required|numeric',
            'email' => 'email',
            'mobile_no' => 'required|numeric',
            'address' => 'required',
        ]);

        $employee = Employee::find($request->id);
        $employee->update($request->all());

        return redirect()->route('employee.index');
    }

    public function destroy(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index');
    }

}
