<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Land;
use App\Partner;
use App\land_partner;

use Illuminate\Support\Facades\Redirect;


class LandController extends Controller
{
  public function home()
  {
    $lands = Land::All();
      return view('vendor.adminlte.land.home',compact('lands'));
  }
  public function single($id)
  {
    $land = Land::with('partners')->find($id);
      return view('vendor.adminlte.land.single',compact('land'));
  }
  public function add()
  {
      return view('vendor.adminlte.land.add');
  }
  public function store() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'type' => 'required|max:255',
        'address' => 'required|max:255',
        'area' => 'required|max:255',
        'price' => 'required|max:255',
        'predicted_cost' => 'required',
        'contract_date' => 'required|date',
        'delivery_date' => 'required|date',
      ]);
      Land::create([
        'name' => request('name'),
        'type' => request('type'),
        'address' => request('address'),
        'area' => request('area'),
        'price' => request('price'),
        'predicted_cost' => request('predicted_cost'),
        'contract_date' => request('contract_date'),
        'delivery_date' => request('delivery_date'),
        'created_at' => date("Y/m/d"),
        'updated_at'=> date("Y/m/d"),
      ]);
      return redirect('/land');
      }
      public function addpartner($id)
      {
        $land = Land::find($id);
        $partners = Partner::all();
          return view('vendor.adminlte.land.addpartner' , compact('land' , 'partners'));
      }
      public function storepartner()
      {
        $id = request('id');
        $land_id = request('land_id');
        $check_existsance = land_partner::where('land_id', $land_id)->where('partner_id', $id)->get();
        if($check_existsance->isEmpty()):
        $land_percentage = request('land_percentage');
        $construction_percentage = request('construction_percentage');
        $land = Land::find(request('land_id'));
        $land_share = ($land->price * $land_percentage)/100;
        $construction_share = ($land->predicted_cost * $construction_percentage)/100;
        $total_percentage = ($land_share + $construction_share) / ($land->price + $land->predicted_cost)*100;
        $relation = $land->partners()->attach( $id , [ 'land_percentage' => $land_percentage , 'construction_percentage' => $construction_percentage , 'total_percentage' => $total_percentage]);
        return redirect('/land/'.$land_id);
      else:
        return redirect('/addpartner/'.$land_id);
      endif;
      }
      public function test($id)
      {
        $partner = Partner::with('lands')->find($id);
        foreach ($partner->lands as $land) {
          dd($land->name);
        }
      }


}
