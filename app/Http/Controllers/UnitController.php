<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\UnitsPhoto;
use App\Unit;
use App\Land;

class UnitController extends Controller
{
  public function home()
  {
    $units = Unit::with('items' , 'contractors','lands', 'photos')->get();
      return view('vendor.adminlte.units.home',compact('units'));
  }
  public function add($id)
  {
    $land= Land::find($id)->first();
      return view('vendor.adminlte.units.add' , compact('land'));
  }
  public function store() {
      $this->validate(request(),[
        'floor_no' => 'required',
        'flat_no' => 'required',
        'land_id' => 'required',
        'area' => 'required',
        'price' => 'required',
        'unit_type' => 'required',
        'photos.*' => 'image|mimes:jpeg,bmp,png',
      ]);
      $unit_id = Unit::create([
        'floor_no' => request('floor_no'),
        'flat_no' => request('flat_no'),
        'land_id' => request('land_id'),
        'area' => request('area'),
        'price' => request('price'),
        'unit_type' => request('unit_type'),
        'description' => request('description'),

      ]);
      if(!empty(request('photos'))){
        foreach (request('photos') as $photo) {
          $file_name = $photo->getClientOriginalName();
          $photo->move(public_path().'/images/',$unit_id->id . $file_name);
          UnitsPhoto::create([
            'unit_id' => $unit_id->id,
            'filename' => $file_name,
          ]);
        }
      }
      return redirect('/land'.'/'.request('land_id'));
      }

      public function single($id)
      {
        $unit = Unit::with('lands')->find($id);
          return view('vendor.adminlte.units.single',compact('unit'));
      }

}
