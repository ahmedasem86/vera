<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cclient;
class CclientController extends Controller
{
  public function home()
  {
    $clients = Cclient::All();
      return view('vendor.adminlte.cclient.home',compact('clients'));
  }
  public function single($id)
  {
    $client = Cclient::find($id);
      return view('vendor.adminlte.cclient.single',compact('client'));
  }
  public function add()
  {
      return view('vendor.adminlte.cclient.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'contract_date' => 'required|date',
        'end_date' => 'required|date',
      ]);
      Cclient::create([
        'name' => request('name'),
        'address' => request('address'),
        'contract_date' => request('contract_date'),
        'end_date' => request('end_date'),
      ]);
      return redirect('/cclients');
      }
}
