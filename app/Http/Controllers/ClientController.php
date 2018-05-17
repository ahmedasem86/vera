<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
  public function home()
  {
    $clients = Client::All();
      return view('vendor.adminlte.clients.home',compact('clients'));
  }
  public function add()
  {
      return view('vendor.adminlte.clients.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'client_id_no' => 'required|max:255',
        'mobile_no' => 'required|max:255',

      ]);
      Client::create([
        'name' => request('name'),
        'address' => request('address'),
        'client_id_no' => request('client_id_no'),
        'mobile_no' => request('mobile_no'),
      ]);
      return redirect('/clients');
      }
}
