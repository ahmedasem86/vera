<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
class MaterialController extends Controller
{
  public function home()
  {
    $materials = Material::All();
      return view('vendor.adminlte.materials.home',compact('materials'));
  }
  public function add()
  {
      return view('vendor.adminlte.materials.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'unit' => 'required|max:255',

      ]);
      Material::create([
        'name' => request('name'),
        'unit' => request('unit'),
        'notes' => request('notes'),

      ]);
      return redirect('/materials');
      }
}
