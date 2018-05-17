<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
class PartnerController extends Controller
{
  public function home()
  {
    $partners = Partner::All();
      return view('vendor.adminlte.partner.home',compact('partners'));
  }
  public function add()
  {
      return view('vendor.adminlte.partner.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'partner_id' => 'required|max:255',
      ]);
      Partner::create([
        'name' => request('name'),
        'address' => request('address'),
        'partner_id' => request('partner_id'),

      ]);
      return redirect('/partners');
      }
}
