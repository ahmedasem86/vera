<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
  public function home()
  {
    $items = Item::All();
      return view('vendor.adminlte.items.home',compact('items'));
  }
  public function add()
  {
      return view('vendor.adminlte.items.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',

      ]);
      Item::create([
        'name' => request('name'),
        'notes' => request('notes'),

      ]);
      return redirect('/items');
      }
}
