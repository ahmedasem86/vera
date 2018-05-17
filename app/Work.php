<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
  protected $fillable = ['item_id','land_id','contractor_id','metres','single_cost' , 'total_cost' , 'notes'];

  public function contractors()
  {
      return $this->belongsTo('App\Contractor' , 'contractor_id');
  }
  public function items()
  {
      return $this->belongsTo('App\Item' , 'item_id');
  }
  public function lands()
  {
      return $this->belongsTo('App\Land' , 'land_id');
  }
}
