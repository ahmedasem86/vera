<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\UnitsPhoto;
use App\Unit;
use App\Land;
use App\Payment;

use App\Client;
use App\Installement;
use DB;

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
        $unit = Unit::with('lands','installements')->find($id);

          return view('vendor.adminlte.units.single',compact('unit'));
      }

      public function addsale($id)
      {
        $unit= Unit::where('id' , $id)->first();
        $clients = Client::all();
          return view('vendor.adminlte.units.addsale' , compact('unit' ,'clients'));
      }

      public function preview($id) {
        $this->validate(request(),[
          'sale_price' => 'required',
          'advance' => 'required',
          'installement_interval' => 'required',
          'no_of_installements' => 'required',
        ]);
        $date = date('Y-m-d');
        $client_id = request('client_id');
        $client = Client::find($client_id);
        $advance = request('advance');
        $sale_price = request('sale_price');
        $no_of_installements = request('no_of_installements');
        $installement_interval = request('installement_interval');
        $notes = request('sale_notes');
        $unit= Unit::where('id' , $id)->first();
        if($sale_price == $advance){
          $selling_method = 1 ;
        }else{
          $selling_method = 0 ;
          $remaining_price = $sale_price - $advance;
          $installement_cost = $remaining_price / $no_of_installements;
          for($i=0 ; $i< request('no_of_installements') ; $i++){
            $installement = [];
            $installement['id'] = $i ;
            $installement['date'] = $date = date('Y-m-d', strtotime("+ ".$installement_interval." months", strtotime($date)));
            $installement['cost'] = $installement_cost ;
            $installements[] = $installement ;
          }
          $last_installement = end($installements);
        }
        return view('vendor.adminlte.units.preview' , compact('client','installement_interval','installement_cost','installements' ,'notes','unit' , 'advance','sale_price','no_of_installements','last_installement','notes'));
          }
          public function storesale($id){
            $date = date('Y-m-d');
            $advance = request('advance');
            $sale_price = request('sale_price');
            $no_of_installements = request('no_of_installements');
            $installement_interval = request('installement_interval');
            $client_id = request('client_id');
            $client = Client::find($client_id);
            $notes = request('sale_notes');
            $unit= Unit::where('id' , $id)->first();
            if($sale_price == $advance){
              $selling_method = 1 ;
            }else{
              $selling_method = 0 ;
              $remaining_price = $sale_price - $advance;
              $installement_cost = $remaining_price / $no_of_installements;
              for($i=0 ; $i< request('no_of_installements') ; $i++){
                $date = date('Y-m-d', strtotime("+ ".$installement_interval." months", strtotime($date)));
                Installement::create([
                  'unit_id' => $id,
                  'due_date' => $date ,
                  'cost' => $installement_cost,
                  'remaining_cost' => $installement_cost,
                ]);
              }
            }

            DB::table('units')
                ->where('id', $id)
                ->update([
                  "client_id" => $client->id ,
                  "status" => '1',
                  "selling_method" => $selling_method,
                  "sale_price" => $sale_price,
                  "advance" => $advance,
                  "installement_interval" => $installement_interval,
                  "no_of_installements" => $no_of_installements,
                  "sale_notes" => $notes,
                ]);
                return redirect('/unit'.'/'.$id);

          }
          public function pay($id)
          {
            $installement = Installement::find($id);
            $remained_cost = $installement->remaining_cost;
            $installement ->update([
              'remaining_cost' => 0 ,

            ]);
            Payment::create([
              'installement_id' => $id,
              'payed' => $remained_cost,
            ]);

              return $installement;
          }
          public function partial($id)
          {

            $installement = Installement::find($id);
            if($installement->remaining_cost >= request('amount')){
              $new_value = $installement->remaining_cost - request('amount');
              $installement ->update([
                'remaining_cost' => $new_value ,
              ]);
              Payment::create([
                'installement_id' => $id,
                'payed' => request('amount'),
              ]);
            }else{
              return ' payed amount can\'t be greater than remaining amount ';
            }
              return 'success';
          }

}
