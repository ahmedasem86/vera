<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpurchase extends Model
{
  protected $fillable = ['supplier_id','material_id','client_id','quantity','single_cost','total_cost','notes'];

  public function supplier()
  {
      return $this->belongsTo('App\Csupplier' , 'supplier_id');
  }
  public function material()
  {
      return $this->belongsTo('App\Cmaterial' , 'material_id');
  }
  public function client()
  {
      return $this->belongsTo('App\Cclient' , 'client_id');
  }
}
