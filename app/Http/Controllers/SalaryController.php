<?php

namespace App\Http\Controllers;
use App\Salary;
use App\Employee;

use Illuminate\Http\Request;

class SalaryController extends Controller
{

  public function home()
  {
    $salaries = Salary::all();
      return view('vendor.adminlte.salaries.home',compact('salaries'));
  }
  public function add($id)
  {
    $employee = Employee::find($id)->first();
      return view('vendor.adminlte.salaries.add' , compact('employee'));
  }

  public function store() {
    $total = request('fixed_salary') +
    request('incentive') +
    request('allowance') -
    request('deductions') -
    request('absence') -
    request('advance');
      $this->validate(request(),[
        'month' => 'required'

      ]);
      Salary::create([
        'month' => request('month'),
        'employee_id' => request('employee_id'),
        'deductions' => request('deductions'),
        'incentive' => request('incentive'),
        'allowance' => request('allowance'),
        'advance' => request('advance'),
        'absence' => request('absence'),
        'notes' => request('notes'),
        'total' => $total,
      ]);
      return redirect('/employee/'. request('employee_id'));
      }
}
