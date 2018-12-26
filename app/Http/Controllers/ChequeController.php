<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cclient;
use App\Cheque;

class ChequeController extends Controller
{
  public function add($id)
  {
    $client = Cclient::find($id);
    $users = User::All();
      return view('vendor.adminlte.cclient.addcheque',compact('users','client'));
  }
  public function store($id) {
      // $this->validate(request(),[
      //   'name' => 'required|max:255',
      //   'address' => 'required|max:255',
      //   'contractor_id' => 'required|max:255',
      //   'mobile_no' => 'required',
      //
      // ]);
      Cheque::create([
        'user_id' => request('user_id'),
        'cclient_id' => $id,
        'cheque_id' => request('cheque_id'),
        'value' => request('value'),
        'receiving_date' => request('receiving_date'),
        'notes' => request('notes'),
      ]);
      return redirect('/cclients/'.request('client_id'));
      }

}
