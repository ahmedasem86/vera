<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Land;

class UnitController extends Controller
{
  public function home()
  {
    $units = Unit::with('items' , 'contractors','lands')->get();
      return view('vendor.adminlte.units.home',compact('units'));
  }
  public function add($id)
  {
    $land= Land::find($id)->first();
      return view('vendor.adminlte.units.add' , compact('land'));
  }

  public function store() {
      $this->validate(request(),[
      ]);
      $total_cost = request('single_cost') * request('metres') ;
      Unit::create([
        'floor_no' => request('floor_no'),
        'flat_no' => request('flat_no'),
        'land_id' => request('land_id'),
        'area' => request('area'),
        'price' => request('price'),
        'unit_type' => request('unit_type'),
      ]);
      return redirect('/land'.'/'.request('land_id'));
      }

}
