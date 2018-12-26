<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contractor;

class ContractorController extends Controller
{
  public function home()
  {
    $contractors = Contractor::All();
      return view('vendor.adminlte.contractors.home',compact('contractors'));
  }
  public function add()
  {
      return view('vendor.adminlte.contractors.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'contractor_id' => 'required|max:255',
        'mobile_no' => 'required',

      ]);
      Contractor::create([
        'name' => request('name'),
        'address' => request('address'),
        'contractor_id' => request('contractor_id'),
        'mobile_no' => request('mobile_no'),
      ]);
      return redirect('/contractors');
      }
}
