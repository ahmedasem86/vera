<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Land;
use App\Contractor;
use App\Item;

class WorkController extends Controller
{
  public function home()
  {
    $works = Work::with('items' , 'contractors','lands')->get();
      return view('vendor.adminlte.works.home',compact('works'));
  }
  public function add()
  {
    $lands = Land::All();
    $contractors = Contractor::All();
    $items = Item::All();

      return view('vendor.adminlte.works.add' , compact('lands' , 'contractors' , 'items'));
  }

  public function store() {
      $this->validate(request(),[
      ]);
      $total_cost = request('single_cost') * request('metres') ;
      Work::create([
        'item_id' => request('item_id'),
        'land_id' => request('land_id'),
        'contractor_id' => request('contractor_id'),
        'metres' => request('metres'),
        'single_cost' => request('single_cost'),
        'total_cost' => $total_cost,
        'notes' => request('notes'),
      ]);
      return redirect('/works');
      }
}
