<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Csupplier;
class CsupplierController extends Controller
{
  public function home()
  {
    $suppliers = Csupplier::All();
      return view('vendor.adminlte.csupplier.home',compact('suppliers'));
  }
  public function single($id)
  {
    $supplier = Csupplier::find($id);
      return view('vendor.adminlte.csupplier.single',compact('supplier'));
  }
  public function add()
  {
      return view('vendor.adminlte.csupplier.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'supplier_id_no' => 'required|max:255',
      ]);
      Csupplier::create([
        'name' => request('name'),
        'address' => request('address'),
        'supplier_id_no' => request('supplier_id_no'),
        'mobile_no' => request('mobile_no'),
      ]);
      return redirect('/csuppliers');
      }

}
