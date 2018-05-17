<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = ['material_id','land_id','supplier_id','quantity','single_cost' , 'total_cost' , 'notes'];

  public function suppliers()
  {
      return $this->belongsTo('App\Supplier' , 'supplier_id');
  }
  public function materials()
  {
      return $this->belongsTo('App\Material' , 'material_id');
  }
  public function lands()
  {
      return $this->belongsTo('App\Land' , 'land_id');
  }
}
