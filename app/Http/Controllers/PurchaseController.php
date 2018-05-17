<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Land;
use App\Supplier;
use App\Material;

class PurchaseController extends Controller
{
  public function home()
  {
    $purchases = Purchase::with('materials' , 'suppliers','lands')->get();
      return view('vendor.adminlte.purchases.home',compact('purchases'));
  }
  public function add()
  {
    $lands = Land::All();
    $suppliers = Supplier::All();
    $materials = Material::All();

      return view('vendor.adminlte.purchases.add' , compact('lands' , 'suppliers' , 'materials'));
  }

  public function store() {
      $this->validate(request(),[
      ]);
      $total_cost = request('single_cost') * request('quantity') ;
      Purchase::create([
        'material_id' => request('material_id'),
        'land_id' => request('land_id'),
        'supplier_id' => request('supplier_id'),
        'quantity' => request('quantity'),
        'single_cost' => request('single_cost'),
        'total_cost' => $total_cost,
        'notes' => request('notes'),
      ]);
      return redirect('/purchases');
      }
}
