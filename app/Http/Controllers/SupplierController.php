<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
  public function home()
  {
    $suppliers = Supplier::All();
      return view('vendor.adminlte.suppliers.home',compact('suppliers'));
  }
  public function add()
  {
      return view('vendor.adminlte.suppliers.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'supplier_id_no' => 'required|max:255',
        'mobile_no' => 'required|max:255',

      ]);
      Supplier::create([
        'name' => request('name'),
        'address' => request('address'),
        'supplier_id_no' => request('supplier_id_no'),
        'mobile_no' => request('mobile_no'),
      ]);
      return redirect('/suppliers');
      }
}
