<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Land;

class LandController extends Controller
{
  public function home()
  {
    $lands = Land::All();
      return view('vendor.adminlte.land.home',compact('lands'));
  }
  public function single($id)
  {
    $land = Land::find($id);
    $land->name;
      return view('vendor.adminlte.land.single',compact('land'));
  }
  public function add()
  {
      return view('vendor.adminlte.land.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'type' => 'required|max:255',
        'address' => 'required|max:255',
        'area' => 'required|max:255',
        'price' => 'required|max:255',
        'predicted_cost' => 'required',
        'contract_date' => 'required|date',
        'delivery_date' => 'required|date',
      ]);
      Land::create([
        'name' => request('name'),
        'type' => request('type'),
        'address' => request('address'),
        'area' => request('area'),
        'price' => request('price'),
        'predicted_cost' => request('predicted_cost'),
        'contract_date' => request('contract_date'),
        'delivery_date' => request('delivery_date'),
      ]);
      return redirect('/land');
      }
}
