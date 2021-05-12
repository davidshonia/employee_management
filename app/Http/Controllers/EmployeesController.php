<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;







class EmployeesController extends Controller
{
    public function index()
    {
        $employee = Employee::orderBy('name')->paginate(4);
        return view('employee_view.index')->with('employee', $employee);

    }

    public function create()
    {
        return view('employee_view.create');
    }

    public function update(Request $request, $id)
    {

        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect()->route('index');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employee_view.edit')->with('employee', $employee);
    }



    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('index');
    }
}
