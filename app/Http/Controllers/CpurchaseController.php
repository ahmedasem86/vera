<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpurchase;
use App\Csupplier;
use App\Cmaterial;
use App\Cclient;

class CpurchaseController extends Controller
{
  public function home()
  {
    $purchases = Cpurchase::with('supplier','material','client')->get();
      return view('vendor.adminlte.cpurchases.home',compact('purchases'));
  }
  public function add()
  {
    $suppliers = Csupplier::All();
    $materials = Cmaterial::All();
    $clients = Cclient::All();

      return view('vendor.adminlte.cpurchases.add' , compact('suppliers' , 'materials' , 'clients'));
  }

  public function store() {
      $this->validate(request(),[
      ]);
      $total_cost = request('single_cost') * request('quantity') ;
      Cpurchase::create([
        'supplier_id' => request('supplier_id'),
        'material_id' => request('material_id'),
        'client_id' => request('client_id'),
        'quantity' => request('quantity'),
        'single_cost' => request('single_cost'),
        'total_cost' => $total_cost,
        'notes' => request('notes'),
      ]);
      return redirect('/cpurchases');
      }
}
