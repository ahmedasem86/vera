<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cmaterial;
class CmaterialController extends Controller
{
  public function home()
  {
    $materials = Cmaterial::All();
      return view('vendor.adminlte.cmaterial.home',compact('materials'));
  }
  public function single($id)
  {
    $material = Cmaterial::find($id);
      return view('vendor.adminlte.cmaterial.single',compact('material'));
  }
  public function add()
  {
      return view('vendor.adminlte.cmaterial.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'unit' => 'required|max:255',
      ]);
      Cmaterial::create([
        'name' => request('name'),
        'unit' => request('unit'),
        'notes' => request('notes'),
      ]);
      return redirect('/cmaterials');
      }
}
