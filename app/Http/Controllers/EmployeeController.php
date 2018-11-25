<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function home()
  {
    $employees = Employee::all();
      return view('vendor.adminlte.employee.home',compact('employees'));
  }
  public function add()
  {
      return view('vendor.adminlte.employee.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'mobile_no' => 'required|max:255',
        'id_no' => 'required|max:255',
        'fixed_salary' => 'required|max:255',

      ]);
      Employee::create([
        'name' => request('name'),
        'address' => request('address'),
        'mobile_no' => request('mobile_no'),
        'id_no' => request('id_no'),
        'fixed_salary' => request('fixed_salary'),
      ]);
      return redirect('/employee');
      }

      public function single($id)
      {
        $employee = Employee::with('salary')->find($id);
          return view('vendor.adminlte.employee.single',compact('employee'));
      }
}
